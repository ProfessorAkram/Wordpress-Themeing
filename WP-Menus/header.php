<html>
<body>

<!-- ================================== ADDING IT TO THE THEME ====================================== -->

<!--  To place the a wp menu in your theme you will want to use one of the methods below. Again for HTML5 best practices, it is suggested that you remove the other div, with the function above and place the lines of code below inside a <nav> element within one of your theme.php pages. If you are adding a top menu for example it may appear in the header.php file as in this example -->


<!-- Placing a single menu or if more menus exsist will place the first created menu -->
   
    <?php wp_nav_menu(); ?>


<!-- To place a sepcific menu you will need to use the code below, where 'Menu Name' is the name you set for the menu -->
    
    <?php wp_nav_menu( array('menu' => 'Menu Name ' )); ?>


<!-- ================================== END ADDING IT TO THE THEME ====================================== -->
</body>

</html>