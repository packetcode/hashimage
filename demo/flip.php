<?php
	require_once '../hashimage.php';

	//create a hashimage object
	$image = new hashimage();

	//get the image source file
	$imagefile = '../images/man.jpg';

	$image->load($imagefile) //load image
			->flip('vertical') //flip the image vertically
				->show(); //display the image


	/*
		Flip Function Options:
		
			VERTICAL 		- Flips image vertically
			Horizontally 	- Flips image Horizontally
			BOTH 			- Flips image both horizontally and vertically
	*/

				
