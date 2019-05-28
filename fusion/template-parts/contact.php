<?php
/*
Template Name: Contact
*/

?>
<!-- Contact Section Start -->
<section id="contact" class="section-padding bg-gray">
    <div class="container">
        <div class="section-header text-center">
            <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Countact Us</h2>
            <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
        </div>
        <div class="row contact-form-area wow fadeInUp" data-wow-delay="0.3s">
            <div class="col-lg-7 col-md-12 col-sm-12">
                <div class="contact-block">
                    <?php if ( is_active_sidebar( 'widget-1' )  ) {
                        dynamic_sidebar( 'widget-1' );
                    }
		          ?>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 col-xs-12">
                <?php if ( is_active_sidebar( 'widget-2' )  ) {
                        dynamic_sidebar( 'widget-2' );
                    }
		          ?>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->
