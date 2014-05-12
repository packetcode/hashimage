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
			->resize('400px') //resize image by 400px in width
				->filter('lift') //load filter lift
				 ->watermark() //add the watermark
					->show(); //display the image
