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
        <div class="col-sm-12 col-md-6">
                <?php echo do_shortcode('[contact-form-7 id="65" title="Contact form 1"]'); ?>
        </div>
        <div class="col-sm-12 col-md-6">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1766.0748408008276!2d85.34152125823647!3d27.71266442023372!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19713a775e3b%3A0x4ac2dbddb1b94976!2sTexas%20INT&#39;L%20SCHOOL!5e0!3m2!1sen!2snp!4v1585327488789!5m2!1sen!2snp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
</div>                
<?php
			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();

