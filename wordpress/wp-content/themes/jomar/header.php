<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage jomar_practice
 * @since Dance Studio 1.0
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <title> <?php the_title(); ?>  <?php bloginfo('name'); ?></title>
    <meta charset="utf-8">
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/main.css" id="color-switcher-link">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/animations.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/fonts.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>"> <!-- style.css -->
    <script src="<?php echo get_template_directory_uri()?>/js/vendor/modernizr-2.6.2.min.js"></script>

    <!--[if lt IE 9]>
        <script src="<?php echo get_template_directory_uri()?>/js/vendor/html5shiv.min.js"></script>
        <script src="<?php echo get_template_directory_uri()?>/js/vendor/respond.min.js"></script>
    <![endif]-->
<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

<div id="box_wrapper">



<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-sm-12"> 
                <?php
					if ( is_front_page() && is_home() ) : ?>
						<a class="navbar-brand text-center" href="<?php echo esc_url( home_url( '/' ) ); ?>" >WYS<span><?php bloginfo( 'name' ); ?></span></a>
					<?php else : ?>
						<a class="navbar-brand text-center" href="<?php echo esc_url( home_url( '/' ) ); ?>" >WYS<span><?php bloginfo( 'name' ); ?></span></a>
					<?php endif;

				?>

                <span id="toggle_mobile_menu"></span>
                <nav id="mainmenu_wrapper">
                	  <ul id="mainmenu" class="nav sf-menu">	
					<?php 

					$defaults = array(
							    'theme_location'  => 'primary',
							    'menu'            => '',
							    'container'       => '',
							    'container_class' => '',
							    'container_id'    => '',
							    'menu_class'      => 'menu_class',
							    'menu_id'         => '',
							    'echo'            => true,
							    'fallback_cb'     => 'wp_page_menu',
							    'before'          => '',
							    'after'           => '',
							    'link_before'     => '',
							    'link_after'      => '',
							    'items_wrap'      => '%3$s',
							    'depth'           => 0,
							    'walker'          => ''
							);


					wp_nav_menu( $defaults ); 



					?>
				</ul>
<!-- 
                  
                        <li class="active">
                            <a href=""></a>
                        </li>                            
                        <li>
                            <a href="about_us.html">Pages</a>
                            <ul>
                                <li>
                                    <a href="about_us.html">About Us</a>                                        
                                </li>
                                <li>
                                    <a href="service.html">Service</a>                                        
                                </li>
                                 <li>
                                    <a href="timetable.html">Timetable</a>                                        
                                </li>
                                <li>
                                    <a href="class-single.html">Single Class</a>                                        
                                </li>
                                <li>
                                    <a href="icons.html">Icons</a>
                                </li>
                                <li>
                                    <a href="animation.html">Animation</a>
                                </li>
                                <li>
                                    <a href="shortcodes.html">Shortcodes&amp;Widgets</a>
                                </li>
                                
                            </ul>
                        </li>                            
                        <li>
                            <a href="gallery.html">Gallery</a>
                        </li>
                        <li>
                            <a href="blog-single.html">Blog</a>                                
                        </li>
                        <li>
                            <a href="contact.html">Contact</a>
                        </li> -->
                    </ul>  
                </nav>
            
            </div>
        </div>
    </div>
</header>


