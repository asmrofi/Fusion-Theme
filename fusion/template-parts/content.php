<?php
/**
 *Template Name:One Page Template
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fusion
 */

?>
<?php get_header();?>

<!-- Services Section Start -->
<?php get_template_part('template-parts/our-services');?>
<!-- Services Section End -->


<!-- About Section start -->
<?php get_template_part('template-parts/about');?>
<!-- About Section End -->


<!-- Features Section Start -->
<?php get_template_part('template-parts/features');?>
<!-- Features Section End -->


<!-- Team Section Start -->
<?php get_template_part('template-parts/team');?>
<!-- Team Section End -->


<!-- Pricing section Start -->
<?php get_template_part('template-parts/pricing');?>
<!-- Pricing Table Section End -->


<!-- Testimonial Section Start -->
<?php get_template_part('template-parts/testimonial-content');?>
<!-- Testimonial Section End -->


<!-- Call To Action Section Start -->
<?php get_template_part('template-parts/call-to-action');?>
<!-- Call To Action Section End -->


<!-- Contact Section Start -->
<?php get_template_part('template-parts/contact');?>
<!-- Contact Section End -->


<?php get_footer();?>
