<?php
/* =================================== SET UP (functions.php) ======================================= */
//In order to enable the use of Wordpress Featured Images (post thumbnails) you need to add the following to your functions.php: 
   
/* ========================================Thumbnail Support ======================================== */
add_theme_support('post-thumbnails');

/* ======================================== Image Sizes ======================================== */
/* When uploading an image to Wordpress you might find it helpful for Wordpress's built in image editor to upload and 
   create various sizes of the image that you would use throughout the site. These resized versions help with load times.
   You have the option to scale the image uniformly based off the width, of if the height is included the height, or choose
   to hard crop (true) to a specific size. For each image size you need to give it a name that you can refrence later when 
   declaring your thumbnail image. Below are some generic examples.*/
   
add_image_size('fetured-thumb', 960,400, true); /*hard crops*/ 
add_image_size('post-thumb', 700); /*scaled by width */
add_image_size('recent-thumb', 350,150, false); /*soft crop scaled by height*/ 




/* ======================================== HTML5 FIGURE for images ========================================*/
/* By default the images in the post content will display as an image in a div, however best practice in HTML5 is to use
   the figure element with a figcaption. For Wordpress to use this method the following function must be inlcuded. */
   
function activate_semantic_markup() {
 
	$args = array(
		'gallery',
		'caption'
	);
	
	add_theme_support( 'html5', $args );
 
}
 
add_action( 'after_setup_theme', 'activate_semantic_markup' );

/* ======================================== END SET UP  ============================================= */
?>
