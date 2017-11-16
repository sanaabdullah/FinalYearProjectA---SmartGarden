#!/usr/bin/python
import RPi.GPIO as GPIO 
import spidev
import time
import os
import Adafruit_DHT
import datetime
from time import gmtime, strftime
import csv

GPIO.setmode(GPIO.BCM)
  # Set sensor type : Options are DHT11,DHT22 or AM2302
DHT11_sensor=Adafruit_DHT.DHT11
 
# Set GPIO sensor is connected to
DHT11_gpio = 4
WaterLevel_gpio = 21

Light_bulb = 18 # Relay 1
Water_pump = 17 # Relay 2
Ventilation_fan = 15 # Relay 3
Solenoid_valve = 14 # Relay 4

# Set the gpio pin to an input
GPIO.setup(WaterLevel_gpio, GPIO.IN)

relay_pins = [18,17,15,14]

#setting the mode for all pins so all will be switched on 
GPIO.setup(relay_pins, GPIO.OUT)


#for loop where pin = 18 next 17 ,15, 14 
for pin in relay_pins :
    #setting the GPIO to HIGH or 1 or true
    GPIO.output(pin,  GPIO.HIGH)
	
# Open SPI bus
spi = spidev.SpiDev()
spi.open(0,0)
 
# Function to read SPI data from MCP3008 chip
# Channel must be an integer 0-7
def ReadChannel(channel):
    adc = spi.xfer2([1,(8+channel)<<4,0])
    data = ((adc[1]&3) << 8) + adc[2]
    return data
 
# Function to convert data to voltage level,
# rounded to specified number of decimal places.
def ConvertVolts(data,places):
    volts = (data * 3.3) / float(1023)
    volts = round(volts,places)
    return volts
 

 
# Define sensor channels
light_channel = 0
moisture_channel  = 1
waterlevel_channel  = 2

# Define delay between readings
delay = 20
 
 # create or open file for saving data (Need to do testing)
def SaveToFile(filename,data):
    
    # get current date and time
    current = strftime("%a, %d %b %Y %H:%M:%S", gmtime())

    # create or open file for saving data
    filename = filename + ".csv"
    if os.path.exists(filename):
        print( filename + " exists, opening now ... ...")
        append_write = 'a' 
    else:
        print("file does exist, created a new one")
        append_write = 'w'

    with open(filename,append_write) as sensor_data:
        lists = [current, data]
        writer = csv.writer(sensor_data)
        writer.writerow(lists)
 
while True:
 
  # Read the light sensor data
    light_level = ReadChannel(light_channel)
    light_volts = ConvertVolts(light_level,2)
 
  # Read the soil mositure sensor data
    moisture_level = ReadChannel(moisture_channel)
    moisture_volts = ConvertVolts(moisture_level,2)
  
    water_level = ReadChannel(waterlevel_channel)
    water_volts = ConvertVolts(water_level,2)
 
    # Print out results
    print ("--------------------------------------------")
    print("Light: {} ({}V)".format(light_level,light_volts))
    SaveToFile("light",light_level)
  
    percent = 100 - int(round(moisture_level/10.24))
    print("Moisture: {} ({}V)  Percentage: {}%".format(moisture_level,moisture_volts,percent))

    # Use read_retry method. This will retry up to 15 times to
    # get a sensor reading (waiting 2 seconds between each retry).
    humidity, temperature = Adafruit_DHT.read_retry(DHT11_sensor, DHT11_gpio)
    
    # Reading the DHT11 is very sensitive to timings and occasionally
    # the Pi might fail to get a valid reading. So check if readings are valid.
    if humidity is not None and temperature is not None:
        fahrenheit = (temperature * 9/5) + 32
        print('Temperature = {0:0.1f}*C  Humidity = {1:0.1f}%'.format(temperature, humidity))
        print('Fahrenheit = {0:0.1f}*F  '.format(fahrenheit))
    else:
        print('Failed to get reading. Try again!')
    SaveToFile("temperature",temperature)
    SaveToFile("humidity",humidity)
    
    waterlevel = ""
    #print("Water Level: {} ({}V)".format(water_level,water_volts))
    if GPIO.input(WaterLevel_gpio) == False and water_level > 600:
        print("Water Level: Almost empty")
        waterlevel = "EMPTY"
        #opening the solenoid valve
        GPIO.output(Solenoid_valve,  GPIO.LOW)
        if GPIO.input(Solenoid_valve) == False:
            print("***FILLING UP THE TANK***")
    elif water_level < 500:
        #closing the solenoid valve
        GPIO.output(Solenoid_valve,  GPIO.HIGH)
        print("Water Level: Tank is full")
        waterlevel = "FULL"
    elif GPIO.input(WaterLevel_gpio) == True and GPIO.input(Solenoid_valve) == False:
        print("Water Level: Filling up the tank until full")
        waterlevel = "FILLING"
    elif GPIO.input(WaterLevel_gpio) == True:
        print("Water Level: Enough Water")
        waterlevel = "ENOUGH"
    SaveToFile("water_level",waterlevel)
        
    if light_level > 20:
        GPIO.output(Light_bulb, GPIO.LOW)
        print("Plant Grow Light: TURN ON")
        SaveToFile("Light_bulb","ON") #Need further coding: check if the last status is same, no save status require
    else:
        GPIO.output(Light_bulb, GPIO.HIGH)
        print("Plant Grow Light: TURN OFF")
        SaveToFile("Light_bulb","OFF")
    
    if temperature > 28:
        GPIO.output(Ventilation_fan, GPIO.LOW)
        print("Ventilation Fan: TURN ON")
        SaveToFile("Ventilation_fan","ON")
    else:
        GPIO.output(Ventilation_fan, GPIO.HIGH)
        print("Ventilation Fan: TURN OFF")
        SaveToFile("Ventilation_fan","OFF")
    
    if percent > 50:
        GPIO.output(Water_pump, GPIO.LOW)
        print("Water Pump: TURN ON")
        SaveToFile("water_pump","ON")
    else:
        GPIO.output(Water_pump, GPIO.HIGH)
        print("Water Pump: TURN OFF")
        SaveToFile("water_pump","OFF")
        
  # Wait before repeating loop
    time.sleep(delay)
