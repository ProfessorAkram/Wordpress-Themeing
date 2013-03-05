<?php
/* =================================== SET UP (functions.php) ======================================= */

//In order to enable the use of Wordpress Menus you need to add the following to your functions.php: 

   
      register_nav_menus(); //function allows for menus to be active




/*By default the menu is output as an unoreded list inside of a <div> element. 
However, HTML5 suggest we place navigation items inside of a <nav> element, thus we can get rid of the 
<div> element. In order for the menu to display without a <div> element you need to add the following 
function to your functions.php file */


      //Function to remove <div> around menus  
	    function my_wp_nav_menu_args( $args = '' )
      {
	      $args['container'] = false;
	      return $args;
      } //END Function to remove <div> around menus

      //Call the my_wp_nav_menu_args function
      add_filter( 'wp_nav_menu_args', 'my_wp_nav_menu_args' );


/* ======================================== END SET UP  ============================================= */
=
?>