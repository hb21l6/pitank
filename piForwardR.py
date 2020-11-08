import RPi.GPIO as GPIO
 
# Use GPIO numbers not pin numbers
GPIO.setmode(GPIO.BCM)
 
# set up the GPIO channels - one input and one output
GPIO.setup(19, GPIO.IN)
GPIO.setup(16, GPIO.OUT)
 
# input from GPIO26
input_value = GPIO.input(19)
 
# output to GPIO20
GPIO.output(16, True)
