<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package webuni
 */

get_header();
?>

<section id="features" class="section-padding">
    <div class="container">

        <?php
		while ( have_posts() ) :
			the_post();?>

        <a href="">
            <a href="">
                <?php
                if(has_post_thumbnail()){
                the_post_thumbnail("thumbnail","class=>'image'");
                }
            ?>
            </a>
            <img class="img-fluid" src="<?php
                                    $image_tw =   get_post_meta( get_the_ID(), 'image', 1 );
                                    echo wp_kses_post($image_tw);
                                ?>" alt="Image">
        </a>
        <h3><?php the_title();?></h3>
        <p><?php the_excerpt();?></p>
        <?php
            the_post_navigation( array(
				            'prev_text' => __( 'Previous', 'fusion' ),
				            'next_text' => __( 'Next', 'fusion' ),
				        ) );
                    
        endwhile; // End of the loop.
        ?>

    </div>
</section>
<?php
                            
get_sidebar();
get_footer();
