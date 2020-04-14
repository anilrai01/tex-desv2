<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Buziness
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();
?>

<div class="row">
<?php 
            $args = array( 'post_type' => 'fire_activity' );
            $the_query = new WP_Query( $args ); ?>
            <?php
            if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post();?>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 fr-act-card">
                      <img src="<?php echo get_the_post_thumbnail_url(); ?>">
                      <h5><?php echo get_the_title(); ?></h5>
                </div>
            <?php 
            endwhile;
            endif;
            ?>
</div>
                
<?php
			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();

