<html>
<title>#image Demo</title>
<Style>
body{
	margin:0;
	padding; 0;
	font-family:sans-serif;
	-ms-text-size-adjust:100%;
	background:#f8f8f8;
}
.container{
	margin:50px auto;
	width:500px;
	background:White;
	padding: 40px
}
.logo{
	text-align: center;
}
.center{
	text-align: center;
}
.right{
	float:right;
}
</style>
<body>
<div class="container">
	<div class="logo">
		<a href="http://hashimage.com"><img src="../images/watermark.png"/></a>
	</div>
	<p class="center">A simple image manipulation library using php.Its designed on php oop and chain functions so adding
		filters, changing size,shape,orientation and colors can be done very easily.</p>
	<h2>Basic Operations</h2>
	<div>
		<ul>
			<a href="show.php"><li>Display Original Image</li></a>
			<a href="resize.php"><li>Resize image</li></a>
			<a href="crop.php"><li>Crop image</li></a>
			<a href="rotate90.php"><li>Rotate image by 90 degrees</li></a>
			<a href="rotate60.php"><li>Rotate image by 60 degrees</li></a>
			<a href="flip.php"><li>Flip image vertically</li></a>
			<a href="overlay.php"><li>Add a layer filter</li></a>
			<a href="brightness.php"><li>Change Brightness</li></a>
			<a href="contrast.php"><li>Change Contrast</li></a>
			<a href="smoothness.php"><li>Change Smoothness</li></a>
			<a href="pixelate.php"><li>Pixelate the image</li></a>
		</ul>
	</div>
		<h2>Preset Filters</h2>
	<div>
		<ul>
			<a href="filters/antique.php"><li>Antique</li></a>
			<a href="filters/blackwhite.php"><li>Blackwhite</li></a>
			<a href="filters/blur.php"><li>Blur</li></a>
			<a href="filters/boost.php"><li>Boost</li></a>
			<a href="filters/canvas.php"><li>Canvasr</li></a>
			<a href="filters/chrome.php"><li>Chrome</li></a>
			<a href="filters/dreamy.php"><li>Dreamy</li></a>
			<a href="filters/grayscale.php"><li>Grayscale</li></a>
			<a href="filters/lift.php"><li>Lift</li></a>
			<a href="filters/monopin.php"><li>Monopin</li></a>
			<a href="filters/sepia.php"><li>Sepia</li></a>
			<a href="filters/velvet.php"><li>Velvet</li></a>
			<a href="filters/vintage.php"><li>Vintage</li></a>
		</ul>
	</div>
			<h2>Custom Editing</h2>
	<div>
		<ul>
			<li>Resizing the image to 400px on width then adding a preset 'lift'
				then added a watermark <a href="ce1.php">click here</a></li>
			<li>Resizing the image to 30% on width then overlaying 'cracks' filter 
				then rotating image by 90 degress and finally added a watermark at center position
				<a href="ce2.php">click here</a></li>
			<li>Flip the image both vertically and horizontally then crop the image,add brightness and a filter layer
				<a href="ce3.php">click here</a></li>
		</ul>
	</div>
	<hr>
	a <a href="http://packetcode.com">packetcode</a> production 
	<div class="right"><a href="https://twitter.com/shaadomanthra">Krishna Teja</a></div>

</div>
</body>
</html>

