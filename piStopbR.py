import RPi.GPIO as GPIO
 
# Use GPIO numbers not pin numbers
GPIO.setmode(GPIO.BCM)
 
# set up the GPIO channels - one input and one output
GPIO.setup(16, GPIO.IN)
GPIO.setup(16, GPIO.OUT)
 
# input from GPIO7
input_value = GPIO.input(16)
 
# output to GPIO8
GPIO.output(16, True)
