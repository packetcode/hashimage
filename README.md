[![HashImage](images/watermark.png)](http://hashimage.com/)

A Simple image manipulation library using php. Its written with object oriented principles with a footprint of hardly 15kb.The php method chaining and anonymous functions makes the code very simple to use and performance is superb... you can give a try :) 

LIVE DEMO : https://hashimage.com/editor
REFERENCE : https://hashimage.com/library


FEATURES
--------
1. Resizing
2. Cropping
3. Flipping - vertically/horizontally or both
4. Rotation to any angle
5. Alter Brightness/Contrast/Smoothness
6. Pixelate 
7. Add Watermark at any position
8. Add Layers over the image with different filters
9. 12+ Preset Filters 
10. Support for jpeg/png/gif

## Table of Contents

* [Basic Setup](#basic-setup)
* [Resizing ](#resizing-image)
* [Cropping](#cropping-)
* [Flipping](#flipping-)
* [Rotating ](#rotate)
* [Alter Properties](#alter-properties)
* [Watermark](#watermark)
* [Adding Layer](#add-layer)
* [Custom Editing](#custom-editing)
* [Applying Preset Filters](#applying-preset-filters)

Basic Setup
------------
```php
 //include the file
 require_once 'path/to/hashimage.php'; 
 //Create an object of hashimage class
 $image = new hashimage();
 //load the image and dsiplay to browser
 $image->load('path/to/image.jpg')->show();
```

Resizing Image
-------------
Resizing of images can be done using function resize which takes two optional parameters.By default it reduces the image by 50% without and arguments.
```php
 $image->load('path/to/image.jpg')
 		->resize() //default 50% reduction
 			->show();
```
To reduce to 25% we can do it as below
```php
 $image->load('path/to/image.jpg')
 		->resize('25%')
 			->show();
```
To reduce the width to 500px by maintaining aspect ratio
```php
 $image->load('path/to/image.jpg')
 		->resize('500px','width')
 			->show();
```
To reduce the height to 300px by maintaining aspect ratio
```php
 $image->load('path/to/image.jpg')
 		->resize('300px','height')
 			->show();
```
To resize to a square box of dimension 600px
```php
 $image->load('path/to/image.jpg')
 		->resize('600px','square')
 			->show();
```
Custom width and height
```php
// arguments can be passed with or without px i.e. 300 or 300px gives same result
 $image->load('path/to/image.jpg')
 		->resize('500px','400px') 
 			->show();
```

Cropping 
-------------
Cropping of image takes 4 parameters, first two representing x and y position from where the cropping should start and the the other two represent the width and height of the new image formed
```php
 $image->load('path/to/image.jpg')
 		->crop(50,60,400,500) //crop from position x=50,y=60 and width=400,height=500
 			->show();
```
Flipping 
-------------
The Image can be flipped vertically or horizontall or both 
```php
 //vertical Flip
 $image->load('path/to/image.jpg')
			->flip('vertical') //flip the image vertically
				->show(); //display the image
```
```php
 //Horizontal Flip
 $image->load('path/to/image.jpg')
			->flip('horizontally') //flip the image horizontally
				->show(); //display the image
```
```php
 //Horizontal+Vertical Flip
 $image->load('path/to/image.jpg')
			->flip('both') //flip the image horizontally+vertically
				->show(); //display the image
```
Rotate
---------
Rotate function makes it easy to rotate the image to angle in any direction. It takes two parameters i.e. rotation direction and rotation angle in degrees
```php
 $image->load('path/to/image.jpg')
			->rotate('clockwise',90) //rotate the image 90 degree clockwise
				->show(); //display the image
```
```php
 $image->load('path/to/image.jpg')
			->rotate('anticlockwise',60) //rotate the image 60 degree anticlockwise
				->show(); //display the image
```
Alter Properties
-------------
Using Change function we can alter the image brightness,contrast,smoothness and pixelate. It takes two parameters, first the property and second the level ranging -255 to +255
```php
 $image->load('path/to/image.jpg')
			->change('brightness',60) //increase the brightness by 60 units
				->show(); //display the image
```
```php
 $image->load('path/to/image.jpg')
			->change('contrast',-30) //reduces the contrast by 30 units
				->show(); //display the image
```
```php
 $image->load('path/to/image.jpg')
			->change('smoothness',20) //increase the smoothness by 20 units
				->show(); //display the image
```
```php
 $image->load('path/to/image.jpg')
			->change('pixelate',20) //distorts the pixelate by 20 units
				->show(); //display the image
```
Watermark
-----------
To add a watermark we can use watermark method which takes an anonymous function to update the watermark settings. For this to work properly make sure the watermark image path is set correctly.
```php
 //set the watermark image path
 $image->watermark->image = 'path/to/watermark.png';

 $image->load('path/to/image.jpg') //load image
			->watermark() //create a watermark on the image on right bottom corner(default position)
				->show(); //display the image
```
```php
 $image->load('path/to/image.jpg') //load image
			->watermark(function($obj){
						$obj->position = 'center';
						$obj->size = '100';
					}) //create a watermark of 100px and position center
				->show(); //display the image
 // other positions 
 //  - topright,topcenter,topleft
 //  - centerright,center,centerleft	
 //  - bottomright,bottomcenter,bottomleft	

 // parameters that can be altered are
 //  - position,size,opacity,padding,	
```
```php
 // Custom position of watermark
 $image->load('path/to/image.jpg') //load image
			->watermark(function($obj){
						$obj->x = '200';
						$obj->y = '100';
					}) //create a watermark at position x=200px y=100px
				->show(); //display the image
```
Add Layer
--------
Using hashimage overlay function its very easy to add a filter png image. It takes two paramters, first being filter image name and second is opacity. Make sure the png image is available in filter folder and filter folder path is correctly used.
```php
 //set the filter folder path
 $image->filterfolder = 'path/to/filters/';
 
 $image->load('path/to/image.jpg') //load image
			->overlay('cracks',90) //overlay the filter cracks with 90units opacity
				->show(); //display the image				
```
Custom Editing
-------
We can run multiple alterations on the loaded image as follow
```php
 //set the filter folder path
 $image->filterfolder = 'path/to/filters/';
 
 //set the watermark image path
 $image->watermark->image = '../images/watermark.png';
	
 $image->load('path/to/image.jpg') //load image
			->resize('400px') //resize image by 400px in width
				->filter('lift') //load filter lift
				 ->watermark() //add the watermark
					->show(); //display the image							
```

Applying Preset Filters
--------
To make it easy some custom filter settings have be coded and they can be used by using function filters.It takes filter preset name as parameter. Make sure the filter folder is set properly.
```php
 //set the filter folder path
 $image->filterfolder = 'path/to/filters/';
 
 $image->load('path/to/image.jpg') //load image
			->filter('antique') //load filter antique
				->show(); //display the image				
```

----------------------------------------------------------------
Developed by :Krishna Teja @www.packetcode.com 









