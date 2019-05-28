<?php
/*
Template Name: Call To Action
*/
?>
<section id="cta" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12 wow fadeInLeft" data-wow-delay="0.3s">
                <div class="cta-text">
                    <h4>
                        <?php
                            global $fusion;
                            echo wp_kses_post($fusion['titlec']);
                        ?>
                    </h4>
                    <p>
                        <?php
                            global $fusion;
                            echo wp_kses_post($fusion['descriptionc']);
                        ?>
                    </p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12 text-right wow fadeInRight" data-wow-delay="0.3s">
                <br><a href="<?php
                                global $fusion;
                                echo wp_kses_post($fusion['buttunurlc']);
                            ?>" class="btn btn-common">
                    <?php
                        global $fusion;
                        echo wp_kses_post($fusion['buttonc']);
                    ?>
                </a>
            </div>
        </div>
    </div>
</section>
