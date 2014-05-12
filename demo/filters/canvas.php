<?php
	require_once '../../hashimage.php';

	//create a hashimage object
	$image = new hashimage();

	//get the image source file
	$imagefile = '../../images/man.jpg';

	//change the filter folder path
	$image->filterfolder = '../../filters/';

	
	$image->load($imagefile) //load image
			->filter('canvas') //load filter canvas
				->show(); //display the image
