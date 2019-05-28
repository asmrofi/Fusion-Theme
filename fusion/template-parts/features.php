<?php
/*
Template Name: Features
*/

?>
<section id="features" class="section-padding">
    <div class="container">
        <div class="section-header text-center">
            <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">
                <?php
                    global $fusion;
                    echo wp_kses_post($fusion['main-title']);
                ?>
            </h2>
            <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <div class="content-left">
                    <div class="box-item wow fadeInLeft" data-wow-delay="0.3s">
                        <span class="icon">
                            <i class="<?php
                                            global $fusion;
                                            echo wp_kses_post($fusion['icon1']);
                                        ?>"></i>
                        </span>
                        <div class="text">
                            <h4>
                                <?php
                                    global $fusion;
                                    echo wp_kses_post($fusion['title1']);
                                ?>
                            </h4>
                            <p><a href="<?php the_permalink();?>"> <?php
                                    global $fusion;
                                    echo wp_kses_post($fusion['description1']);
                                ?>
                                </a></p>
                        </div>
                    </div>
                    <div class="box-item wow fadeInLeft" data-wow-delay="0.6s">
                        <span class="icon">
                            <i class="<?php
                                            global $fusion;
                                            echo wp_kses_post($fusion['icon2']);
                                        ?>"></i>
                        </span>
                        <div class="text">
                            <h4>
                                <?php
                                    global $fusion;
                                    echo wp_kses_post($fusion['title2']);
                                ?>
                            </h4>
                            <p>
                                <?php
                                    global $fusion;
                                    echo wp_kses_post($fusion['description2']);
                                ?>
                            </p>
                        </div>
                    </div>
                    <div class="box-item wow fadeInLeft" data-wow-delay="0.9s">
                        <span class="icon">
                            <i class="<?php
                                            global $fusion;
                                            echo wp_kses_post($fusion['icon3']);
                                        ?>"></i>
                        </span>
                        <div class="text">
                            <h4>
                                <?php
                                    global $fusion;
                                    echo wp_kses_post($fusion['title3']);
                                ?>
                            </h4>
                            <p>
                                <?php
                                    global $fusion;
                                    echo wp_kses_post($fusion['description3']);
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <div class="show-box wow fadeInUp" data-wow-delay="0.3s">
                    <img src="<?php
                                    global $fusion;
                                    echo wp_kses_post($fusion['image-m']['url']);
                                ?>" alt="Features Image">
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <div class="content-right">
                    <div class="box-item wow fadeInRight" data-wow-delay="0.3s">
                        <span class="icon">
                            <i class="<?php
                                            global $fusion;
                                            echo wp_kses_post($fusion['icon11']);
                                        ?>"></i>
                        </span>
                        <div class="text">
                            <h4>
                                <?php
                                    global $fusion;
                                    echo wp_kses_post($fusion['title11']);
                                ?>
                            </h4>
                            <p>
                                <?php
                                    global $fusion;
                                    echo wp_kses_post($fusion['description11']);
                                ?>
                            </p>
                        </div>
                    </div>
                    <div class="box-item wow fadeInRight" data-wow-delay="0.6s">
                        <span class="icon">
                            <i class="<?php
                                            global $fusion;
                                            echo wp_kses_post($fusion['icon22']);
                                        ?>"></i>
                        </span>
                        <div class="text">
                            <h4>
                                <?php
                                    global $fusion;
                                    echo wp_kses_post($fusion['title22']);
                                ?>
                            </h4>
                            <p>
                                <?php
                                    global $fusion;
                                    echo wp_kses_post($fusion['description22']);
                                ?>
                            </p>
                        </div>
                    </div>
                    <div class="box-item wow fadeInRight" data-wow-delay="0.9s">
                        <span class="icon">
                            <i class="<?php
                                            global $fusion;
                                            echo wp_kses_post($fusion['icon33']);
                                        ?>"></i>
                        </span>
                        <div class="text">
                            <h4>
                                <?php
                                    global $fusion;
                                    echo wp_kses_post($fusion['title33']);
                                ?>
                            </h4>
                            <p>
                                <?php
                                    global $fusion;
                                    echo wp_kses_post($fusion['description33']);
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
