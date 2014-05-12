HashImage
======
A Simple image manipulation library using php. Its written with object oriented principles with a footprint of hardly 15kb, the php method chaining and anonymous functions make the code very simple to use and performance is pretty good. you can give a try :)

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

Minimal Setup
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






