<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fusion
 */

?>
<!-- Footer Section Start -->
<footer id="footer" class="footer-area section-padding">
    <div class="container">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
                    <div class="widget">
                        <?php 
                            if ( is_active_sidebar( 'footer-1' )  ) {
                            dynamic_sidebar( 'footer-1' );
                            }
		                  ?>
                        <div class="social-icon">
                            <a class="facebook" href="<?php
                                                        global $fusion;
                                                        echo wp_kses_post($fusion['social-facebook']);
                                                    ?>"><i class="lni-facebook-filled"></i></a>

                            <a class="twitter" href="<?php
                                                        global $fusion;
                                                        echo wp_kses_post($fusion['social-twitter']);
                                                    ?>"><i class="lni-twitter-filled"></i></a>

                            <a class="instagram" href="<?php
                                                        global $fusion;
                                                        echo wp_kses_post($fusion['social-instagram']);
                                                    ?>"><i class="lni-instagram-filled"></i></a>

                            <a class="linkedin" href="<?php
                                                        global $fusion;
                                                        echo wp_kses_post($fusion['social-linkedin']);
                                                    ?>"><i class="lni-linkedin-filled"></i></a>
                        </div>
                    </div>
                </div>

                <?php if ( is_active_sidebar( 'footer-2' )  ) {
                        dynamic_sidebar( 'footer-2' );
                    }
		          ?>


                <?php if ( is_active_sidebar( 'footer-3' )  ) {
                        dynamic_sidebar( 'footer-3' );
                    }
		          ?>


                <?php if ( is_active_sidebar( 'footer-4' )  ) {
                        dynamic_sidebar( 'footer-4' );
                    }
		          ?>



            </div>

        </div>
    </div>
    <div id="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright-content">
                        <p>Copyright 2019&copy;<a href="https://www.facebook.com/abu.sayem.50702">A.S.M ROFI-UDDIN</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Go to Top Link -->
<a href="#" class="back-to-top">
    <i class="lni-arrow-up"></i>
</a>

<!-- Preloader -->
<div id="preloader">
    <div class="loader" id="loader-1"></div>
</div>
<!-- End Preloader -->

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="assets/js/jquery-min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/jquery.nav.js"></script>
<script src="assets/js/scrolling-nav.js"></script>
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/form-validator.min.js"></script>
<script src="assets/js/contact-form-script.min.js"></script>
<?php wp_footer();?>
</body>

</html>
