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
                            <a class="nav-item nav-link active" id="nav-news" data-toggle="tab" href="#nav-news-tab" role="tab" aria-controls="nav-news-tab" aria-selected="true">News</a>
                            <a class="nav-item nav-link" id="nav-event" data-toggle="tab" href="#nav-event-tab" role="tab" aria-controls="nav-event-tab" aria-selected="true">Events</a>   
                    </div>
                  </nav>
                  <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="nav-news-tab" role="tabpanel" aria-labelledby="nav-news">
                      <div class="row">
                  <?php 
            $args = array( 'post_type' => 'fire_news');
            $the_query = new WP_Query( $args ); ?>
             <?php                   if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post();?>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 fr-news-card">
                                <img src="<?php echo get_the_post_thumbnail_url();?>">
                                <h4><?php echo get_the_title(); ?></h4>
                                <p><?php echo get_the_excerpt(); ?></p>
                                <a href="<?php echo get_the_permalink(); ?>" class="btn btn-primary">Read More</a>
                            </div>
            <?php 
            endwhile;
            endif;
            ?>
                        </div>
                  </div>
                  <div class="tab-pane fade" id="nav-event-tab" role="tabpanel" aria-labelledby="nav-event">
                      <div class="col-md-12" id="event-calender">
            <div class="row">
              <!-- Events -->
              <?php 
$args = array( 'post_type' => 'fire_events' , 'post_count' => '5');
$the_query = new WP_Query( $args ); 
$count = 0;

        $count = 0;
        if ( $the_query->have_posts() ) : ?>
<?php while ( $the_query->have_posts() ) : $the_query->the_post();?>
              <div class=" col-lg-6 event l-event">
                <a href="<?php echo get_the_permalink(); ?>" >
                <div class="row">
                <div class="event-date col-sm-4"><span class="month"><?php echo get_post_meta(get_the_ID(), 'meta-box-month', true); ?></span><span class="date"><?php echo get_post_meta(get_the_ID(), 'meta-box-day', true); ?></span></div>
                <div class="event-act col-sm-8">
                  <h3><?php echo strip_tags(get_the_title()); ?></h3>
                  <?php strip_tags(get_the_excerpt()); ?>
                </div>
                </div>
                </a>
              </div>
        <?php endwhile; ?>
        <?php endif; ?>
              <!-- Events End  -->
              <!-- Events -->
              
              <!-- Events End  -->
            </div>
          </div>
                  </div>
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

