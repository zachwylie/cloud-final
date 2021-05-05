
runAgain = True

while runAgain == True:

	byteSize = str(input("Is your drive measured in MB, GB, or TB? ")).upper()
	actualSize = 0.0

	if byteSize == "MB":
		driveSize = float(input("What is the size of the drive? "))
		actualSize = (driveSize * 1000000) / 1024 / 1024
		print("The actual size of your drive is", format(actualSize, ".2f"), "MB")

	elif byteSize == "GB":
		driveSize = float(input("What is the size of the drive? "))
		actualSize = (driveSize * 1000000000) / 1024 / 1024 / 1024
		print ("The actual size of your drive is", format(actualSize, ".2f"), "GB")

	elif byteSize == "TB":
		driveSize = float(input("What is the size of the drive? "))
		actualSize = (driveSize * 1000000000000) / 1024 / 1024 / 1024 / 1024
		print ("The actual size of your drive is", format(actualSize, ".2f"), "TB")

	else:
		print("Invalid input...")

	print()

	runAgainPrompt = str(input("Would you like to run the program again? [Y/N]: ")).upper()
	print()

	if runAgainPrompt == "Y":
		runAgain = True
	else:
		runAgain = False