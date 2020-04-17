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
<!-- model splash screen  -->
<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content" id="modal-content">

      <div class="modal-body position-relative">
        <button type="button" class="close p-2 position-absolute" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/building.png" />
      </div>

    </div>
  </div>
</div>

<!-- eof modal  -->
<section id="hero-section">
  <!-- Carousel Start -->

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <!-- <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol> -->
    <div class="carousel-inner">
      <?php
      $args = array('post_type' => 'fire_slider');
      $the_query = new WP_Query($args);
      $count = 0;
      ?>
      <?php if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
          <?php if ($count == 0) : ?>
            <div class="carousel-item active">
            <?php else : ?>
              <div class="carousel-item">
              <?php endif; ?>
              <div class="banner" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>"></div>
              <div class="carousel-caption hero-banner d-none d-md-block">
                <h5><?php echo get_the_content(); ?> </h5>
                <a href="http://localhost/Texas/about/" type="submit" class="btn btn-outline btn-primary">Explore School</a>
              </div>
              </div>
          <?php
          $count++;
        endwhile;
      endif;
          ?>
          <!-- <div class="carousel-item ">
        <div class="banner" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/school/staff.png)"></div>
        <div class="carousel-caption hero-banner d-none d-md-block">
          <h5>Awesome</h5>
          <h5> Teams</h5>
          <p>Our students are challenged to grow intellectually here I am again adding new content for p elelment</p>
          <button type="submit" class="btn btn-outline btn-primary">Explore College</button>
        </div>
      </div>

      <div class="carousel-item ">
        <div class="banner" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/school/home-ban.png)"></div>
        <div class="carousel-caption hero-banner d-none d-md-block">
          <h5>Building</h5>
          <h5> Character</h5>
          <p>Our students are challenged to grow intellectually here I am again adding new content for p elelment</p>
          <button type="submit" class="btn btn-outline btn-primary">Explore College</button>
        </div>
      </div> -->

            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
    </div>

    <!-- Carousel End -->
</section>
<!-- End of Hero Section  -->

<section class="two-sec-p">
  <div class="row">
    <?php $args = array(
      'p'         => 85, // ID of a page, post, or custom type
      'post_type' => 'page'
    );
    $my_posts = new WP_Query($args);
    while ($my_posts->have_posts()) : $my_posts->the_post();
    ?>

      <div class="col-md-4 col-lg-6 part-img">
        <img src="<?php echo wp_get_attachment_url(get_post_meta(get_the_ID(), '_xxxx_attached_image', true)); ?>">
      </div>
      <div class="col-md-8 col-lg-6 part-desc">
        <div class="leaf-over" style="background:url(<?php echo get_template_directory_uri(); ?>/assets/images/lf.png);    background-size: contain;
    background-repeat: no-repeat;
    background-position: right bottom;"></div>
        <h2 class="base-blue">Principal's Welcome</h2>
        <p class="f-ovo">
          <?php echo get_the_excerpt(); ?>
        </p>
        <a class="btn btn-primary mt-3" href="<?php echo get_the_permalink(); ?>"> Meet Our Principal</a>
      </div>
    <?php endwhile; ?>
  </div>
</section>
<section class="two-sec">
  <div class="row">

    <div class="col-md-12 col-lg-6 part-desc-right">
      <p class="base-blue">To keep in pace with the global challenges of the twenty first century, we inculcate in students the strategies required to develop the wholistic approach of knowledge for the material prosperity through spiritual refinement.</p>
      <div class="row">
        <div class="col-md-6 part-img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/school/tez1.bmp">
        </div>
        <div class="col-md-6 part-img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/school/bet.bmp">
        </div>
      </div>
    </div>
    <div class="col-md-12 col-lg-6 part-img">
      <div class="fr-overlay">
        <h2>Come and see texas in Action. Meet with our Principal and our team</h2>
        <button class="btn btn-primary mt-3">Visit Us</button>
      </div>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/school/bb1.bmp">
    </div>
  </div>
</section>

<section id="img-grid">
  <div class="leaf-over" style="background:url(<?php echo get_template_directory_uri(); ?>/assets/images/lf.png);    background-size: contain;
    background-repeat: no-repeat;
    background-position: center right;
    transform: rotate(20deg) scale(1.1) translateX(-150px);"></div>
  <div class="container-fluid">
    <div class="img-overlay"></div>
    <div class="row i-grid-row">
      <div class="col-md-12 col-lg-4 grid-img">
        <!-- small circle  -->
        <div>
          <?php
          $args = array('post_type' => 'fire_activity');
          $the_query = new WP_Query($args);
          $count = 0;
          ?>
          <?php if ($the_query->have_posts()) : ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post();
              if ($count <= 2) { ?>
                <div class="position-absolute circle-md" data-toggle="tooltip" data-placement="top" title="<?php echo get_the_title(); ?>" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)">
                </div>
          <?php } else {
                break;
              }
              $count++;
            endwhile;
            wp_reset_postdata();
          endif;
          ?>
        </div>
        <!-- large circle  -->
        <div>
          <?php
          $args = array('post_type' => 'fire_activity');
          $the_query = new WP_Query($args);
          $count = 0;

          $count = 0;
          if ($the_query->have_posts()) : ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post();
              if ($count <= 4 && $count > 2) { ?>
                <div class="position-absolute circle-big" data-toggle="tooltip" data-placement="top" title="<?php echo get_the_title(); ?>" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)">
                </div>
          <?php } elseif ($count > 4) {
                break;
              }
              $count++;
            endwhile;
            wp_reset_postdata();
          endif;
          ?>
        </div>
      </div>
      <div class="col-md-12 col-lg-4 mid-text">
        <?php $args = array(
          'p'         => 89, // ID of a page, post, or custom type
          'post_type' => 'page'
        );
        $my_posts = new WP_Query($args);
        while ($my_posts->have_posts()) : $my_posts->the_post();
        ?>
          <h1 class="base-pink">Our School Activities</h1>
          <p>
            <?php echo strip_tags(get_the_content()); ?>
          </p>
        <?php endwhile; ?>
      </div>
      <div class="col-md-12 col-lg-4 grid-img right-grid">
        <!-- small circle  -->
        <div>

          <?php
          $args = array('post_type' => 'fire_activity');
          $the_query = new WP_Query($args);
          $count = 0;

          if ($the_query->have_posts()) : ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post();
              if ($count <= 7 && $count > 4) { ?>
                <div class="position-absolute circle-md" data-toggle="tooltip" data-placement="top" title="<?php echo get_the_title(); ?>" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
                </div>
          <?php } elseif ($count > 7) {
                break;
              }
              $count++;
            endwhile;
            wp_reset_postdata();
          endif;
          ?>
        </div>
        <!-- large circle  -->
        <div>
          <?php
          $args = array('post_type' => 'fire_activity');
          $the_query = new WP_Query($args);
          $count = 0;

          $count = 0;
          if ($the_query->have_posts()) : ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post();
              if ($count <= 9 && $count > 7) { ?>
                <div class="position-absolute circle-big" data-toggle="tooltip" data-placement="top" title="<?php echo get_the_title(); ?>" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)">
                </div>
          <?php } else if ($count > 9) {
                break;
              }
              $count++;
            endwhile;
          endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="block-sec" style="background:url(<?php echo get_template_directory_uri(); ?>/assets/images/school/back.bmp);    background-size: cover;
    background-position: bottom;">

</section>

<section id="news-events">
  <div class="leaf-over" style="    background: url(http://localhost/texas/wp-content/themes/buziness/assets/images/lf.png);
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center left;
    transform: rotate(180deg) scale(1.2) translateX(150px);"></div>
  <div class="container-fluid">
    <h1 id="news-heading" class="base-blue"> Recent News & Events</h1>
    <div class="row ">
      <div class="col-md-12 col-lg-6 col-sm-12 mb-5">
        <div class="row news-row">
          <?php
          $args = array('post_type' => 'fire_news', 'post_count' => '2');
          $the_query = new WP_Query($args);
          $count = 0;

          $count = 0;
          if ($the_query->have_posts()) : ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post();
              $post_tags = get_the_tags(); ?>
              <div class="col-md-12 col-lg-6 mb-5">
                <div class="news-card">

                  <div class="news-card-img" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)">
                  </div>

                  <div class="card-content">
                    <span><?php echo  $post_tags[0]->name; ?></span>
                    <p><?php echo strip_tags(get_the_title()); ?></p>
                    <a href="<?php echo get_the_permalink(); ?>" class="btn btn-primary">Read More</a>
                  </div>
                </div>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>

        </div>
      </div>
      <!-- second row  -->
      <div class="col-md-12 col-lg-6 col-sm-12">
        <div class="row">
          <div class="col-md-12" id="event-calender">
            <div id="calender">
              <!-- Events -->
              <?php
              $args = array('post_type' => 'fire_events', 'post_count' => '5');
              $the_query = new WP_Query($args);
              $count = 0;

              $count = 0;
              if ($the_query->have_posts()) : ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                  <div class="event">
                    <a href="<?php echo get_the_permalink(); ?>">
                      <div class="event-date"><span class="month"><?php echo get_post_meta(get_the_ID(), 'meta-box-month', true); ?></span><span class="date"><?php echo get_post_meta(get_the_ID(), 'meta-box-day', true); ?></span></div>
                      <div class="event-act">
                        <h3><?php echo strip_tags(get_the_title()); ?></h3>
                        <?php strip_tags(get_the_excerpt()); ?>
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
          <!-- end of second row -->
        </div>
        <!-- end of second col -->
      </div>
    </div>
  </div>
</section>

<!-- end of isotopic seciton  -->


<!-- footer session  -->
<!-- <?php include('footer-self.php') ?> -->
<!-- end of footer sesstion  -->

<!-- 
<?php
// while (have_posts()) : the_post();

//   get_template_part('template-parts/content', 'page');

// endwhile; // End of the loop.
?> -->

<?php
get_footer();
?>