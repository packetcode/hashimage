<?php
	require_once '../hashimage.php';

	//create a hashimage object
	$image = new hashimage();

	//get the image source file
	$imagefile = '../images/man.jpg';

	$image->load($imagefile) //load image
			->crop(50,60,400,500) //crop from position x=50,y=60 and width=400,height=500
				->show(); //display the image
	/*
		Crop Function Options:
		
		ARG1
			position x - Mention the position of pixel x
		ARG2
			position y - Mention the position of pixel y
		ARG3
			width - Mention the destination width
		ARG4 
			height - Mention the destination height 
	*/
				
