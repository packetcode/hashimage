<html>
<title>#image Demo</title>
<Style>
body{
	margin:0;
	padding; 0;
	font-family:sans-serif;
	-ms-text-size-adjust:100%;
	background:#f8f8f8;
		color:#34495e;

}
.container{
	margin:50px auto;
	width:900px;
	background:White;
	padding: 40px
}
.logo{
	text-align: center;
}
.center{
	text-align: center;
}
p{
	line-height: 23px;
}
.right{
	float:right;
}
.logo{
	text-align: center;
}
</style>
	<style>
pre{
	padding:5px;
	margin:0px;
	background:#f8f8f8;
	border-radius: 5px;

}
code{
	display:block;
	border-radius: 5px;
	background:black;
	color:white;
	word-wrap:break-word;

}
</style>
<body>
<div class="container">
	<div class="logo"><img src="../images/watermark.png" /></div>
	<h1>Documentation</h1>
<div>
<p>
A Simple image manipulation library using php. Its written with object oriented principles with a footprint of hardly 15kb.The php method chaining and anonymous functions makes the code very simple to use and performance is superb... you can give a try :) 
</p>

<p>
<h3>FEATURES</h3>
<div class="line"></div>
<ol>
<li>Resizing</li>
<li>Cropping</li>
<li>Flipping - vertically/horizontally or both</li>
<li>Rotation to any angle</li>
<li>Alter Brightness/Contrast/Smoothness</li>
<li>Pixelate </li>
<li>Add Watermark at any position</li>
<li>Add Layers over the image with different filters</li>
<li>12+ Preset Filters </li>
<li>Support for jpeg/png/gif</li>
</ol>
</p>

<h3>Basic Setup</h3>
<div class="line"></div>

<pre><code class="php">
 //include the file
 require_once 'path/to/hashimage.php'; 
 //Create an object of hashimage class
 $image = new hashimage();
 //load the image and dsiplay to browser
 $image->load('path/to/image.jpg')->show();

</code></pre>

<h3>Resizing Image</h3>
<div class="line"></div>
<p>Resizing of images can be done using function resize which takes two optional 
	parameters.By default it reduces the image by 50% without and arguments.</p>
<pre><code class="php">
 $image->load('path/to/image.jpg')
 		->resize() //default 50% reduction
 			->show();

</code></pre>
<br>
<p>To reduce to 25% we can do it as below</p>
<pre><code class="php">
 $image->load('path/to/image.jpg')
 		->resize('25%')
 			->show();

</code></pre>
<br>
<p>To reduce the width to 500px by maintaining aspect ratio</p>
<pre><code class="php">
 $image->load('path/to/image.jpg')
 		->resize('500px','width')
 			->show();

</code></pre>
<br>
<p>To reduce the height to 300px by maintaining aspect ratio</p>
<pre><code class="php">
 $image->load('path/to/image.jpg')
 		->resize('300px','height')
 			->show();

</code></pre>
<br>
<p>To resize to a square box of dimension 600px</p>
<pre><code class="php">
 $image->load('path/to/image.jpg')
 		->resize('600px','square')
 			->show();

</code></pre>
<br>
<p>Custom width and height</p>
<pre><code class="php">
// arguments can be passed with or without px i.e. 300 or 300px gives same result
 $image->load('path/to/image.jpg')
 		->resize('500px','400px') 
 			->show();

</code></pre><br>

<h3>Cropping</h3> 
<div class="line"></div>
<p>Cropping of image takes 4 parameters, first two representing x and y position 
	from where the cropping should start and the the other two represent the width 
	and height of the new image formed</p>
<pre><code class="php">
 $image->load('path/to/image.jpg')
 		->crop(50,60,400,500) //crop from position x=50,y=60 and width=400,height=500
 			->show();

</code></pre><br>

<h3>Flipping</h3> 
<div class="line"></div>
<p>The Image can be flipped vertically or horizontall or both </p>
<pre><code class="php">
 //vertical Flip
 $image->load('path/to/image.jpg')
			->flip('vertical') //flip the image vertically
				->show(); //display the image

</code></pre><br>
<pre><code class="php">
 //Horizontal Flip
 $image->load('path/to/image.jpg')
			->flip('horizontally') //flip the image horizontally
				->show(); //display the image

</code></pre><br>
<pre><code class="php">
 //Horizontal+Vertical Flip
 $image->load('path/to/image.jpg')
			->flip('both') //flip the image horizontally+vertically
				->show(); //display the image

</code></pre><br>
<h3>Rotate</h3>
<div class="line"></div>
<p>
Rotate function makes it easy to rotate the image to angle in any direction. 
It takes two parameters i.e. rotation direction and rotation angle in degrees</p>
<pre><code class="php">
 $image->load('path/to/image.jpg')
			->rotate('clockwise',90) //rotate the image 90 degree clockwise
				->show(); //display the image

</code></pre><br>
<pre><code class="php">
 $image->load('path/to/image.jpg')
			->rotate('anticlockwise',60) //rotate the image 60 degree anticlockwise
				->show(); //display the image

</code></pre><br>
<h3>Alter Properties</h3>
<div class="line"></div>
<p>Using Change function we can alter the image brightness,contrast,smoothness and 
	pixelate. It takes two parameters, first the property and second the level 
	ranging -255 to +255</p>
<pre><code class="php">
 $image->load('path/to/image.jpg')
			->change('brightness',60) //increase the brightness by 60 units
				->show(); //display the image

</code></pre><br>
<pre><code class="php">
 $image->load('path/to/image.jpg')
			->change('contrast',-30) //reduces the contrast by 30 units
				->show(); //display the image

</code></pre><br>

<pre><code class="php">
 $image->load('path/to/image.jpg')
			->change('smoothness',20) //increase the smoothness by 20 units
				->show(); //display the image

</code></pre><br>

<pre><code class="php">
 $image->load('path/to/image.jpg')
			->change('pixelate',20) //distorts the pixelate by 20 units
				->show(); //display the image

</code></pre><br>
<h3>Watermark</h3>
<div class="line"></div>
<p>To add a watermark we can use watermark method which takes an anonymous function 
	to update the watermark settings. For this to work properly make sure the watermark
	 image path is set correctly.</p>
<pre><code class="php">
 //set the watermark image path
 $image->watermark->image = 'path/to/watermark.png';

 $image->load('path/to/image.jpg') //load image
			->watermark() //create a watermark on the image on right bottom corner(default position)
				->show(); //display the image

</code></pre><br>

<pre><code class="php">
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

</code></pre><br>
<pre><code class="php">
 // Custom position of watermark
 $image->load('path/to/image.jpg') //load image
			->watermark(function($obj){
						$obj->x = '200';
						$obj->y = '100';
					}) //create a watermark at position x=200px y=100px
				->show(); //display the image

</code></pre>
<h3>Add Layer</h3>
<div class="line"></div>
<p>Using hashimage overlay function its very easy to add a filter png image.
 It takes two paramters, first being filter image name and second is opacity.
  Make sure the png image is available in filter folder and filter folder path
   is correctly used.</p>
<pre><code class="php">
 //set the filter folder path
 $image->filterfolder = 'path/to/filters/';
 
 $image->load('path/to/image.jpg') //load image
			->overlay('cracks',90) //overlay the filter cracks with 90units opacity
				->show(); //display the image				

</code></pre><br>
<h3>Custom Editing</h3>
<div class="line"></div>
<p>We can run multiple alterations on the loaded image as follow</p>
<pre ><code class="php">
 //set the filter folder path
 $image->filterfolder = 'path/to/filters/';
 
 //set the watermark image path
 $image->watermark->image = '../images/watermark.png';
	
 $image->load('path/to/image.jpg') //load image
			->resize('400px') //resize image by 400px in width
				->filter('lift') //load filter lift
				 ->watermark() //add the watermark
					->show(); //display the image	

</code></pre>

<h3>Applying Preset Filters</h3>
<div class="line"></div>
<p>To make it easy some custom filter settings have be coded and they can be used
 by using function filters.It takes filter preset name as parameter. Make sure 
 the filter folder is set properly.</p>
<pre><code class="php">
 //set the filter folder path
 $image->filterfolder = 'path/to/filters/';
 
 $image->load('path/to/image.jpg') //load image
			->filter('antique') //load filter antique
				->show(); //display the image

</code></pre>

<hr>
a <a href="http://packetcode.com">packetcode</a> production <a href="http://twitter.com/shaadomanthra">
@krishnaTeja</a>
</div>
</div>
</body>
</html>

