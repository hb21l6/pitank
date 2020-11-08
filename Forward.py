import RPi.GPIO as GPIO

# Use GPIO numbers not pin numbers
GPIO.setmode(GPIO.BCM)

# set up the GPIO channels - one input and one output
GPIO.setup(19, GPIO.IN)
GPIO.setup(16, GPIO.OUT)
GPIO.setup(26, GPIO.IN)
GPIO.setup(20, GPIO.OUT)

# input from GPIO26
input_value = GPIO.input(19)

# output to GPIO20
GPIO.output(16, True)

input_value = GPIO.input(26)

# output to GPIO20
GPIO.output(20, True)




