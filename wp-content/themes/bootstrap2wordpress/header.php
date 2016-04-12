<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_to_WordPress
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- BOOTSTRAP CORE CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous" rel="stylesheet">
        
        
        <!-- FONT AWESOME ICONS -->
        
        <link rel="stylesheet" href="<?php bloginfo('template_directory');  ?>/assets/css/font-awesome/css/font-awesome.min.css">
        
        <!--CUSTOM CSS -->
        
        
        
        <!-- GOOGLE FONTS -->
        
        <link href='https://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
        

<?php wp_head(); ?>

<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        
        <!--[if lt IE9]>
        <script scr="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script scr="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bootstrap2wordpress' ); ?></a>

	<!-- HEADER
        ========================================================================= -->
        <header class= "site-header" role="banner">
           
           <!-- NAVBAR-->
           <div class="navbar-wrapper">
               
               <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                   <div class="container">
                       
                        <div class="navbar-header">
                           
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                             data-target=".navbar-collapse">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                               
                            </button>
                            
                        
                        
                            <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo('stylesheet_directory') ?>/assets/img/logo.png" alt="Bootstrap to Wordpress"> </a>
                        
                        </div>
                        
                        
                        <!-- ========= Adding Primary Navigation Menu (Lecture 48 of B2W) ======== -->
                        
                        <?php
                            wp_nav_menu( array (
                            
                                'theme_location'  => 'primary',
                                'container'       => 'nav',
                                'container_class' => 'navbar-collapse collapse',
                                'menu_class'      => 'nav navbar-nav navbar-right'   /*Menu list class from index.html*/
                            
                            
                            
                            ) );
                    
                        ?>
                        
                        <!-- End of added menu-->
                        
                   </div>
               </div>
           </div>
            
        </header>