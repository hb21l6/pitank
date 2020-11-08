mport RPi.GPIO as GPIO

# Use GPIO numbers not pin numbers
GPIO.setmode(GPIO.BCM)

# set up the GPIO channels - one input and one output
GPIO.setup(20, GPIO.IN)
GPIO.setup(20, GPIO.OUT)
GPIO.setup(16, GPIO.IN)
GPIO.setup(16, GPIO.OUT)


# input from GPIO7
input_value = GPIO.input(20)

# output to GPIO8
GPIO.output(20, True)


# input from GPIO7
input_value = GPIO.input(16)

# output to GPIO8
GPIO.output(16, True)


