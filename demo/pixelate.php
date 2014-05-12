<?php
	require_once '../hashimage.php';

	//create a hashimage object
	$image = new hashimage();

	//get the image source file
	$imagefile = '../images/man.jpg';

	$image->load($imagefile) //load image
			->change('pixelate',20) //increase the pixelate by 20 units
				->show(); //display the image
	/*
		Change Function Options:
		
		ARG1
			BRIGHTNESS 	- alters the brightness of image
			CONTRAST 	- alters the contrast of the image
			SMOOTHNESS 	- Smoothness the image
			PIXELATE 	- Pixelates the image

		ARG2
			-255 to 255 - Represents the units of change 255 being brightest and -255 being darkest
	*/
				
