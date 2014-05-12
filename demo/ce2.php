<?php
	require_once '../hashimage.php';

	//create a hashimage object
	$image = new hashimage();

	//get the image source file
	$imagefile = '../images/man.jpg';
	//change the filter folder path
	$image->filterfolder = '../filters/';
	//change the watermark image path
	$image->watermark->image = '../images/watermark.png';
	
	$image->load($imagefile) //load image
			->resize('30%') //resize image by 30% of original size
				->overlay('cracks',80) //add overlay filter cracks with 80% opacity
				 ->rotate('clockwise',90) //rotate image by 90 degrees clockwise
					->watermark(function($mark){
						$mark->position = 'center';
						$mark->size = '100';
					}) //add a watermark but change its posiiton and size
					->show(); //display the image
