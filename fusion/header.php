<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fusion
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <?php wp_head(); ?>
</head>

<body <?php body_class(array("fusion","rofi"));?>>

    <!-- Header Area wrapper Starts -->
    <header id="header-wrap">
        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <?php if(current_theme_supports("custom-logo")): ?>
                <div class="navbar-brand">
                    <?php the_custom_logo(); ?>
                </div>
                <?php
                endif;
                ?>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="lni-menu"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <?php
                        $defaults = array(
                        'theme_location'  => 'menu-1',
                        'menu_class'      => 'navbar-nav mr-auto w-100 justify-content-end clearfix',
                        'before'          => '<li class="nav-item">',
                        'after'           => '</li>',
                        
                    );

                    wp_nav_menu( $defaults );

                    ?>

                </div>

            </div>
        </nav>
        <!-- Navbar End -->

        <!-- Hero Area Start -->
        <div id="hero-area" class="hero-area-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
                        <div class="contents">
                            <h2 class="head-title"><?php bloginfo("name"); ?></h2>
                            <p><?php bloginfo("description"); ?></p>
                            <div class="header-button">
                                <a href="<?php
                                            global $fusion;
                                            echo wp_kses_post($fusion['hbuton-url1']);
                                        ?>" class="btn btn-common"><i>

                                        <?php
                                        global $fusion;
                                        echo wp_kses_post($fusion['hbutton-1']);
                                    ?>
                                    </i></a>

                                <a href="<?php
                                            global $fusion;
                                            echo wp_kses_post($fusion['hbutton-url2']);
                                        ?>" class="btn btn-border video-popup"><i>

                                        <?php
                                            global $fusion;
                                            echo wp_kses_post($fusion['hbutton-2']);
                                        ?>
                                    </i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                        <div class="intro-img">
                            <img class="img-fluid" src="<?php
                                            global $fusion;
                                            echo wp_kses_post($fusion['side-image']['url']);
                                        ?>" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Area End -->

    </header>
    <!-- Header Area wrapper End -->
