<?php
	require_once '../hashimage.php';

	//create a hashimage object
	$image = new hashimage();

	//get the image source file
	$imagefile = '../images/man.jpg';

	$image->load($imagefile) //load image
			->rotate('clockwise',90) //rotate the image 90 degree clockwise
				->show(); //display the image
	/*
		Rotate Function Options:
		
		ARG1
			CLOCKWISE 		- Rotates image clockwise
			ANTICLOCKWISE 	- Rotates image anti clockwise

		ARG2
			0 to 360 		- Represents the angle in degress to be rotated
	*/
		
				
