<?php
	require_once '../hashimage.php';

	//create a hashimage object
	$image = new hashimage();

	//get the image source file
	$imagefile = '../images/man.jpg';
	$image->watermark->image = '../images/watermark.png';

	$image->load($imagefile) //load image
			->watermark() //create a watermark on the image on right bottom corner
				->show(); //display the image


	/*
		Watermark Function Options:
		
			ARG1
				anonymous function with settings of watermark
	*/

	/*
		Examples:
		
			watermark(function(e){
				e->size = 20;
				e->padding = 10;
				e->opacity = 3;
				3->position = 'topright';
			});
	*/


				
