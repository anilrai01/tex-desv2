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
<section id="hero-section">
  <!-- Carousel Start -->

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <!-- <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol> -->
    <div class="carousel-inner">

      <div class="carousel-item active">
        <div class="banner" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/school/school.png)"></div>
        <div class="carousel-caption hero-banner d-none d-md-block">
          <h5>Our</h5>
          <h5> Premises</h5>
          <p>Our students are challenged to grow intellectually here I am again adding new content for p elelment</p>
          <button type="submit" class="btn btn-outline btn-primary">Explore College</button>
        </div>
      </div>

      <div class="carousel-item ">
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
      </div>

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


<!-- starting second section  -->
<section id="message-from-principle">
  <div class="message-content">
    <h1>A message from the Principal</h1>
    <p>
      Education leads us towards the open path of perfection:
      It cannot be confined to the narrow periphery of bookish
      knowledge; it transcends the barriers of geography, culture
      and the nation.
    </p>
    <p>
      Certainly, you will find Texas Network committed to the
      changes and reforms, we are supposed to adopt in our
      education delivery and to boost all-round development of
      the students through project oriented techniques so that
      they will be well prepared theoretically and practically to
      deal with the problems in the days to come
      <div class="princi-name">- Mr Bhesh Raj Pokhrel</div>
    </p>

    <button class="btn btn-primary mt-3"> Explore </button>

  </div>
  <div class="half-bg">
    <div class="princi-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/bhesh.png)">
    </div>
  </div>
</section>

<!-- ending of second section  -->

<!-- about us session start  -->

<section id="about-us">
  <div class="container-fluid">
    <div class="row about-row">
      <div class="col-md-6 about-banner">
        <h1>Our Schools</h1>
        <p>
          Established by a team of experienced, qualified, dedicated and dynamic academicians in the year 1992,
          Texas International Secondary School falls under the canopy of Texas International Education Network,
          which comprises of Science, Management, Humanities and Law (XI &XII), BBS, BA,BSW, B Sc.CSIT, BBM &
          BBA, BIT, BCS (Bachelor’s Level), as well as MBS and MBA (Master’s Level). Located at the heart of Kathmandu,
          Mitrapark, Chabahil, it is accessible from all parts of the city and the peripheries.
        </p>

        <button class="btn btn-primary">Apply Now</button>
      </div>

      <div class="col-md-6 school-grid">
        <div class="place" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/our-school/lab.png)">
          <div class="place-overlay">
            School
          </div>
        </div>
        <div class="place" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/our-school/small-lab.png)">
          <div class="place-overlay">
            Montesorri
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- about us session end  -->



<!-- starting of iamge Grid session  -->
<section id="img-grid">
  <div class="container-fluid">
    <div class="img-overlay"></div>
    <div class="row i-grid-row">
      <div class="col-md-4 grid-img">
        <!-- small circle  -->
        <div>
          <div class="position-absolute circle-md" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/img-grid/gal-1.png)">
          </div>
          <div class="position-absolute circle-md" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/img-grid/gal-2.png)">
          </div>
          <div class="position-absolute circle-md" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/img-grid/gal-3.png)">
          </div>
        </div>
        <!-- large circle  -->
        <div>
          <div class="position-absolute circle-big" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/img-grid/gal-4.png)">
          </div>
          <div class="position-absolute circle-big" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/img-grid/gal-5.png)">
          </div>
        </div>
      </div>
      <div class="col-md-4 mid-text">
        <h1>Our School Activities</h1>
        <p>
          Developing positivism, love, affection, the
          sense of co-operation and decent habits
          among the young minds has always been our
          prime concern, for which no stone is left
          unturned. “Learn with fun” is the principle that
          we adopt.
        </p>
      </div>
      <div class="col-md-4 grid-img right-grid">
        <!-- small circle  -->
        <div>

          <div class="position-absolute circle-md" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/img-grid/gal-6.png)">
          </div>
          <div class="position-absolute circle-md" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/img-grid/gal-7.png)">
          </div>
          <div class="position-absolute circle-md" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/img-grid/gal-8.png)">
          </div>
        </div>
        <!-- large circle  -->
        <div>
          <div class="position-absolute circle-big" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/img-grid/gal-9.png)">
          </div>
          <div class="position-absolute circle-big" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/img-grid/gal-10.png)">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ending of image grid session  -->


<!-- news and events  -->
<section id="news-events">
  <div class="container-fluid">
    <h1 id="news-heading">News & Events</h1>
    <div class="row ">
      <div class="col-md-6 col-sm-12 mb-5">
        <div class="row news-row">
          <div class="col-md-6 mb-5">
            <div class="news-card">

              <div class="news-card-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/news/tour.png)">
              </div>

              <div class="card-content">
                <span>School Trip</span>
                <p>School trip to Jarshing Pauwa with all the staff members</p>
                <button class="btn btn-primary">Read More</button>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="news-card">

              <div class="news-card-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/news/science.png)">
              </div>

              <div class="card-content">
                <span>Science Exhibition</span>
                <p>Many schools from all around Kathmandu is going to gather
                </p>
                <button class="btn btn-primary">Read More</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- second row  -->
      <div class="col-md-6  col-sm-12">
        <div class="row">
          <div class="col-md-12" id="event-calender">
            <div id="calender">
              <!-- Events -->
              <div class="event">
                <div class="event-date">Thu 26</div>
                <div class="event-act">
                  <h3>High School Final Exams</h3>
                  March 26 @ 8:00 AM - March 27 @ 5:00 PM
                </div>
              </div>
              <!-- Events End  -->
              <!-- Events -->
              <div class="event">
                <div class="event-date">Thu 26</div>
                <div class="event-act">
                  <h3>High School Final Exams</h3>
                  March 26 @ 8:00 AM - March 27 @ 5:00 PM
                </div>
              </div>
              <!-- Events End  -->
              <!-- Events -->
              <div class="event">
                <div class="event-date">Thu 26</div>
                <div class="event-act">
                  <h3>High School Final Exams</h3>
                  March 26 @ 8:00 AM - March 27 @ 5:00 PM
                </div>
              </div>
              <!-- Events End  -->
              <!-- Events -->
              <div class="event">
                <div class="event-date">Thu 26</div>
                <div class="event-act">
                  <h3>High School Final Exams</h3>
                  March 26 @ 8:00 AM - March 27 @ 5:00 PM
                </div>
              </div>
              <!-- Events End  -->
              <button class="btn btn-secondary">Load More</button>
            </div>
          </div>
          <!-- end of second row -->
        </div>
        <!-- end of second col -->
      </div>
    </div>
  </div>
</section>
<!-- end of news and events  -->


<!-- isotopic section  -->

<section id="isotop">
  <div class="iso-img isotop-one" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/salient-features/it-lab.png)">
    <div class="place-overlay">
      Digital Lab
    </div>
  </div>
  <div class="iso-img isotop-two" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/salient-features/library.png)">
    <div class="place-overlay">
      Library
    </div>
  </div>
  <div class="iso-img isotop-three" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/salient-features/games-sports.png)">
    <div class="place-overlay">
      Games and Sports
    </div>
  </div>
  <div class="iso-content">
    <!-- <div class="game-svg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/svg/games.svg)"></div>
    <div class="study-svg"></div> -->
    <h2>Our Salient Features</h2>
    <p class="mb-5">
      Caring, loving and supportive educational environment
      Inculcation of positive attitude with regard to dignity and discipline
      Renowned, competent, qualified, experienced, disciplined &
      co-operative faulty members & staffs
    </p>
    <button class="btn btn-primary">Our Extra Curricular Activities</button>
  </div>
</section>

<!-- end of isotopic seciton  -->


<!-- footer session  -->
<?php include('footer-self.php') ?>
<!-- end of footer sesstion  -->


<?php
while (have_posts()) : the_post();

  get_template_part('template-parts/content', 'page');

endwhile; // End of the loop.
?>

<?php
get_footer();
?>