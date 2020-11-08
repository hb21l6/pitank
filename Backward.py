import RPi.GPIO as GPIO

# Use GPIO numbers not pin numbers
GPIO.setmode(GPIO.BCM)

# set up the GPIO channels - one input and one output
GPIO.setup(16, GPIO.IN)
GPIO.setup(19, GPIO.OUT)
GPIO.setup(20, GPIO.IN)
GPIO.setup(26, GPIO.OUT)

# input from GPIO26
input_value = GPIO.input(16)

# output to GPIO20
GPIO.output(19, True)

input_value = GPIO.input(20)

# output to GPIO20
GPIO.output(26, True)




