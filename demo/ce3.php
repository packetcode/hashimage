<?php
	require_once '../hashimage.php';

	//create a hashimage object
	$image = new hashimage();

	//get the image source file
	$imagefile = '../images/man.jpg';
	//change the filter folder path
	$image->filterfolder = '../filters/';
	$image->watermark->image = '../images/watermark.png';
	
	$image->load($imagefile) //load image
		  ->flip('BOTH') //flip image both vertically and horizontally
		  ->crop(40,50,400,500) //crop image from pixel x-40 and y-50 to a width of 400px and height of 500px
		  ->change('brightness',60) //increase brightness by 60 units
		  ->overlay('vignette',80) //add a layer vignette
		  ->show(); //display the image
