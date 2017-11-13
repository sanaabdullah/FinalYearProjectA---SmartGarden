import RPi.GPIO as GPIO
import time
GPIO.setmode(GPIO.BCM)
GPIO.setup(22,GPIO.IN)
while True:
    if GPIO.input(22) == True:
        print ("No Water Detected")
    elif GPIO.input(22) == False:
        print ("Water Detected")
        
    time.sleep(1)

