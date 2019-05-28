<?php
/*
Template Name: Pricing
*/

?>

<!-- Pricing section Start -->
<section id="pricing" class="section-padding">
    <div class="container">
        <div class="section-header text-center">
            <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Pricing</h2>
            <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
        </div>
        <div class="row" <?php post_class(); ?>>
            <?php
				    $args=array('post_type'=>'pricing');
                    $pricing =new WP_Query($args);
                        while($pricing->have_posts()):$pricing->the_post()
                ?>

            <div class="col-lg-4 col-md-6 col-xs-12">
                <div class="table wow fadeInRight" data-wow-delay="1.2s">
                    <div class="icon-box">
                        <i class="<?php
                                     $text = get_post_meta(get_the_ID() , 'icon', true);
                                    echo wp_kses_post($text);
                                ?>"></i>
                    </div>
                    <div class="pricing-header">
                        <p class="price-value">$<?php
                                     $text = get_post_meta(get_the_ID() , 'amount', true);
                                    echo wp_kses_post($text);
                                ?><span><?php
                                     $text = get_post_meta(get_the_ID() , 'year', true);
                                    echo wp_kses_post($text);
                                ?></span></p>
                    </div>
                    <div class="title">
                        <h3><?php the_title();?></h3>
                    </div>
                    <ul class="description">
                        <li><?php the_content();?></li>

                    </ul>
                    <button class="btn btn-common"><a href="<?php
                                     $button_url = get_post_meta(get_the_ID() , 'Button_url', true);
                                    echo wp_kses_post($button_url);
                                ?>">
                            <?php
                                $button = get_post_meta(get_the_ID() , 'Button_name', true);
                                echo wp_kses_post($button);
                            ?></a></button>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>
<!-- Pricing Table Section End -->
