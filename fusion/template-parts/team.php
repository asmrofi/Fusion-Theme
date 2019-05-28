<?php
/*
Template Name: Our Team
*/
?>
<!-- Team Section Start -->
<section id="team" class="section-padding bg-gray">
    <div class="container">
        <div class="section-header text-center">
            <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Meet our team</h2>
            <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
        </div>
        <div <?php post_class("row"); ?>>
            <?php
				    $args=array('post_type'=>'team_membar');
                    $teamm =new WP_Query($args);
                        while($teamm->have_posts()):$teamm->the_post()
                ?>

            <div class="col-lg-6 col-md-12 col-xs-12">
                <!-- Team Item Starts -->
                <div class="team-item wow fadeInRight" data-wow-delay="0.8s">
                    <div class="team-img">
                        <img class="img-fluid" src="<?php
                                    $image_tw =   get_post_meta( get_the_ID(), 'image', 1 );
                                    echo wp_kses_post($image_tw);
                                ?>" alt="Image">

                    </div>
                    <div class="contetn">
                        <div class="info-text">
                            <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                            <p><?php
                                     $text = get_post_meta(get_the_ID() , 'Designation_name', true);
                                    echo  wp_kses_post($text);
                                ?>
                            </p>
                        </div>
                        <p><?php the_content();?></p>
                        <ul class="social-icons">
                            <li><a href="<?php
                                            $facebook = get_post_meta(get_the_ID() , 'wiki_test_facebookurl', true);
                                            echo wp_kses_post($facebook);
                                        ?>"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                            <li><a href="<?php
                                            $twitter = get_post_meta(get_the_ID() , 'wiki_test_twitterurl', true);
                                            echo wp_kses_post($twitter);
                                        ?>"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                            <li><a href="<?php
                                            $instagram = get_post_meta(get_the_ID() , 'wiki_test_instagramurl', true);
                                            echo wp_kses_post($instagram);
                                        ?>"><i class="lni-instagram-filled" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- Team Item Ends -->
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>
<!-- Team Section End -->
