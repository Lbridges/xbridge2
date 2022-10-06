<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package xbridge
 */

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Demo Theme" />
        <meta name="author" content="Lauren Bridges" />
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri() . '/img/favicon.ico'; ?>" />
        <?php
		wp_head();
		?>
    </head>
    <body>
        <header>
            
            <nav class="navbar navbar-expand-md fixed-top navbar-light bg-light">
                <div class="container">
                    <a class="navbar-brand" href="https://github.com/Lbridges/xbridge/tree/master/xbridge">
                        <img src="<?php echo get_template_directory_uri() . '/img/luxury-logo.png'; ?>" alt="Luxury Logo" />
                    </a>                
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <?php
                        wp_nav_menu(
                            array(
                                'menu' => 'primary',
                                'container' => '',
                                'theme_location' => 'primary',
                                'items_wrap' => '<ul id="" class="navbar-nav">%3$s</ul>'
                            )
                        );
                        ?>                    
                    </div>
                </div>
            </nav>            
        </header>
       
