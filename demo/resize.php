<?php
	require_once '../hashimage.php';

	//create a hashimage object
	$image = new hashimage();

	//get the image source file
	$imagefile = '../images/man.jpg';

	$image->load($imagefile) //load image
			->resize('200px') //resizes the image to width of 400px and height proportionally
				->show(); //display the image
	/*
		Resize Function Options:
		
		ARG1
			pixels / percent / pixel numeric 
			eg: 300px or 25% or just 250 

		ARG2
			mode / dimension 
			eg: square or just pixel 500 which is considered as height	
	*/
	
	/*
		----examples-----
		resize('300px') or resize('300') - resizes the image width to 300px and height proportionally
		resize('20%') -  reduces the image to 20% of its original size with aspect ratio
		resize(300,500) or resize('300px','500px') - resizes the image to custom size 
		resize(300,'square') - resizes the image to a square of size 300px
	*/


				
