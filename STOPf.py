mport RPi.GPIO as GPIO

# Use GPIO numbers not pin numbers
GPIO.setmode(GPIO.BCM)

# set up the GPIO channels - one input and one output
GPIO.setup(26, GPIO.IN)
GPIO.setup(26, GPIO.OUT)
GPIO.setup(19, GPIO.IN)
GPIO.setup(19, GPIO.OUT)


# input from GPIO7
input_value = GPIO.input(26)

# output to GPIO8
GPIO.output(26, True)


# input from GPIO7
input_value = GPIO.input(19)

# output to GPIO8
GPIO.output(19, True)


