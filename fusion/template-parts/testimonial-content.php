<?php
/*
Template Name: Testimonial
*/

?>
<!-- Testimonial Section Start -->
<section id="testimonial" class="testimonial section-padding">
    <div class="container" <?php post_class(); ?>>
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div id="testimonials" class="owl-carousel wow fadeInUp" data-wow-delay="1.2s">\
                    <?php
				    $args=array('post_type'=>'testimonial');
                    $testimonial =new WP_Query($args);
                        while($testimonial->have_posts()):$testimonial->the_post()
                ?>

                    <div class="item">
                        <div class="testimonial-item">
                            <div class="img-thumb">
                                <img src="<?php
                                    $imaget =   get_post_meta( get_the_ID(), 'image', 1 );
                                    echo wp_kses_post($imaget);
                                ?>" alt="Image">
                            </div>
                            <div class="info">
                                <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                                <h3><?php
                                     $text = get_post_meta(get_the_ID() , 'client_designation', true);
                                    echo wp_kses_post($text);
                                ?>
                                </h3>
                            </div>
                            <div class="content">
                                <p class="description"><?php the_content();?></p>
                                <div class="star-icon mt-3">
                                    <span><i class="lni-star-filled"></i></span>
                                    <span><i class="lni-star-filled"></i></span>
                                    <span><i class="lni-star-filled"></i></span>
                                    <span><i class="lni-star-filled"></i></span>
                                    <span><i class="lni-star-half"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>


                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonial Section End -->
