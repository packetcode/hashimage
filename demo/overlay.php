<?php
	require_once '../hashimage.php';

	//create a hashimage object
	$image = new hashimage();

	//get the image source file
	$imagefile = '../images/man.jpg';
	$image->filterfolder = '../filters/';
	$image->load($imagefile) //load image
			->overlay('cracks',90) //overlay the filter cracks with 90units opacity
				->show(); //display the image
	/*
		Overlay Function Options:
		
		ARG1
			ANTIQUE - Adds antique filter
			BUBBLES	- Adds bubbles filter
			CANVAS 	- Adds canvas filter
			cracks 	- Adds cracks filter
			crinkle	- Adds crinkle filter
			emulsion - Adds Emulsion filter
			NOISE 	- Adds noise filter
			SCRATCH - Adds scratch filter
			VINGETTE- Adds vignette filter
			WARP 	- Adds warp filter

			/->these filters png files stored in filter folder

		ARG2
			0 to 255 - Represents the units of opacity
	*/
				
