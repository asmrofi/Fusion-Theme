<?php
/**
 *Template Name: Our Services
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fusion
 */

?>
<section id="services" class="section-padding">

    <div class="container">
        <div class="section-header text-center">
            <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Our Services</h2>
            <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
        </div>
        <div class="row" <?php post_class(); ?>>
            <?php
				    $args=array('post_type'=>'service');
                    $service =new WP_Query($args);
                        while($service->have_posts()):$service->the_post()
                ?>
            <!-- Services item -->
            <div class="col-md-6 col-lg-4 col-xs-12">
                <div class="services-item wow fadeInRight" data-wow-delay="0.3s">
                    <div class="icon">
                        <i class="<?php
                                     $icon = get_post_meta(get_the_ID() , 'icon', true);
                                    echo wp_kses_post($icon);
                                ?>"></i>
                    </div>
                    <div class="services-content">
                        <h3><a href="#"><?php the_title();?></a></h3>
                        <p><?php the_content();?></p>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>
