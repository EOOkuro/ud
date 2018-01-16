<?php
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A layout example with a side menu that hides on mobile, just like the Pure website.">
    <title>Responsive Side Menu &ndash; Layout Examples &ndash; Pure</title>
    
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-" crossorigin="anonymous">
    <link rel="stylesheet" href="dist/css/slider-pro.min.css"/>
    
    
        <!--[if lte IE 8]>
            <link rel="stylesheet" href="css/layouts/side-menu-old-ie.css">
        <![endif]-->
        <!--[if gt IE 8]><!-->
            <link rel="stylesheet" href="public_html/css/layouts/side-menu.css">
        <!--<![endif]-->
</head>
<body>

    <div id="main">
        <div class="header">
            <h1>Page Title</h1>
            <h2>A subtitle for your page goes here</h2>
        </div>

        <div class="slider-pro" id="my-slider">
	<div class="sp-slides">
		<!-- Slide 1 -->
		<div class="sp-slide">
			<img class="sp-image" src="public_html/img/sing.jpg"/>
		</div>
		
		<!-- Slide 2 -->
		<div class="sp-slide">
		    <img class="sp-image" src="public_html/img/fun.jpg"/>
			<p>Lorem ipsum dolor sit amet</p>
		</div>
		
		<!-- Slide 3 -->
		<div class="sp-slide">
		    <img class="sp-image" src="public_html/img/circle.jpg"/>
			<h3 class="sp-layer">Lorem ipsum dolor sit amet</h3>
			<p class="sp-layer">consectetur adipisicing elit</p>
		</div>
	</div>
</div>

<script type="text/javascript">
	jQuery( document ).ready(function( $ ) {
		$( '#my-slider' ).sliderPro();
	});
</script>

       
  


<script src="libs/js/jquery-1.11.0.min.js"></script>
<script src="dist/js/jquery.sliderPro.min.js"></script>
<script src="js/ui.js"></script>

</body>
</html

 
<?php
 
    /*
        Any variables passed in through the variables parameter in our renderLayoutWithContentPage() function
        are available in here.
    */
 
    echo $setInIndexDotPhp;
 
?>