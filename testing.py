#!/usr/bin/python
import time
import os
import csv
import datetime
from time import gmtime, strftime

for x in range(1, 3):
    filename = "opo"
    data = "number" + str(x)
    current = strftime("%a, %d %b %Y %H:%M:%S", gmtime())

    now = strftime("%a, %d %b %Y %H:%M:%S", gmtime())

    # create or open file for saving data
    aa = filename + ".csv"
    if os.path.exists(filename):
        print("sensor_data.csv exists, opening now ... ...")
        append_write = 'a' 
    else:
        print("file does exist, created a new one")
        append_write = 'w' 
        
    with open('opo.csv',append_write) as sensor_data:
        data = "number" + str(x)  
        lists = [current, data]
        writer = csv.writer(sensor_data)
        writer.writerow(lists)
    
    time.sleep(2)
    
    