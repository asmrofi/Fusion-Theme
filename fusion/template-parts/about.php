<?php
/**
 *Template Name: About Us
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fusion
 */

?>
<div class="about-area section-padding bg-gray">
    <div class="container">
        <div class="section-header text-center">
            <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">About Us</h2>
            <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12 col-xs-12 info">
                <div class="about-wrapper wow fadeInLeft" data-wow-delay="0.3s">
                    <div>
                        <div class="site-heading">
                            <h2 class="section-title">
                                <?php
                                    global $fusion;
                                    echo wp_kses_post($fusion['title-a']);
                                ?>
                            </h2>
                        </div>
                        <div class="content">
                            <p>
                                <?php
                                    global $fusion;
                                    echo wp_kses_post($fusion['content-a']);
                                ?>
                            </p>
                            <a href="<?php
                                        global $fusion;
                                        echo wp_kses_post($fusion['button-urla']);
                                    ?>" class="btn btn-common mt-3">
                                <?php
                                    global $fusion;
                                    echo wp_kses_post($fusion['button-a']);
                                ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-xs-12 wow fadeInRight" data-wow-delay="0.3s">
                <img class="img-fluid" src="<?php
                                                global $fusion;
                                                echo wp_kses_post($fusion['image-a']['url']);
                                            ?>" alt="Abou Image">
            </div>
        </div>
    </div>
</div>
