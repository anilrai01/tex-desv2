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
                <div class="col-lg-12 ">
                  <nav>
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                    <?php
$taxonomy = 'faculty_categories';
$count = 0;
$terms = get_terms($taxonomy); // Get all terms of a taxonomy
if ( $terms && !is_wp_error( $terms ) ) :
?>
        <?php foreach ( $terms as $term ) { ?>
          <?php if($count == 0){ ?>
          <a class="nav-item nav-link active" id="nav-tab<?php echo $count; ?>" data-toggle="tab" href="#nav-home<?php echo $count; ?>" role="tab" aria-controls="nav-home<?php echo $count; ?>" aria-selected="true"><?php echo $term->name; ?></a>
          <?php } else {?>
            <a class="nav-item nav-link" id="nav-tab<?php echo $count; ?>" data-toggle="tab" href="#nav-home<?php echo $count; ?>" role="tab" aria-controls="nav-home<?php echo $count; ?>" aria-selected="true"><?php echo $term->name; ?></a>
          <?php } ?>
        <?php 
        $count++;
      } ?>
<?php endif;?>
                      
                    </div>
                  </nav>
                  <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
<?php $terms = get_terms($taxonomy); 
$count = 0;// Get all terms of a taxonomy
if ( $terms && !is_wp_error( $terms ) ) :
?>
        <?php foreach ( $terms as $term ) { ?>
          
            <?php 
            $args = array( 'post_type' => 'fire_faculty' ,
            'tax_query' => array(
              array(
                  'taxonomy' => 'faculty_categories',
                  'field'    => 'slug',
                  'terms'    => $term->name,
              ),
          ), );
            $the_query = new WP_Query( $args ); ?>
                      <?php if($count == 0){ ?>
              <div class="tab-pane fade show active" id="nav-home<?php echo $count; ?>" role="tabpanel" aria-labelledby="nav-tab<?php echo $count; ?>">
                      <?php } else { ?>
                        <div class="tab-pane fade" id="nav-home<?php echo $count; ?>" role="tabpanel" aria-labelledby="nav-tab<?php echo $count; ?>">
                      <?php } ?>
            <?php

                    if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post();?>
                      <?php echo get_the_title(); ?>
            <?php 
            endwhile;
            endif;
            ?>
            
            </div>
          <?php $count++;
          } 
          endif;?>
                  </div>
                
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

