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

Minimum Setup
------------
```php
 //include the file
 require_once 'path/to/hashimage.php'; 
 //Create an object of hashimage class
 $image = new hashimage();
 //load the image and dsiplay to browser
 $image->load('path/to/image.jpg')->show();
```

Advanced Setup
-------------
```php
 require_once 'path/to/hashimage.php'; 
```
Create an object of hashimage class
```php
 $image = new hashimage();
```





