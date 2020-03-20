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

<section id="about-header">
    <div class="row">
        <div class="col-md-8">
            <div class="abt-content">
                <h1>Welcome to <span class="text-1"> Texas Int'l </span> <span class="text-2"> S. School </span></h1>
                <p>

                    Established by a team of experienced, qualified, dedicated and dynamic academicians in the year 1992,
                    Texas International Secondary School falls under the canopy of Texas International Education Network,
                    which comprises of Science, Management, Humanities and Law (XI &XII), BBS, BA,BSW, B Sc.CSIT, BBM &
                    BBA, BIT, BCS (Bachelor’s Level), as well as MBS and MBA (Master’s Level). Located at the heart of Kathmandu,
                    Mitrapark, Chabahil, it is accessible from all parts of the city and the peripheries.
                </p>
                <p>
                    To keep in pace with the global challenges of the twenty first century, we inculcate in students the strategies
                    required to develop the wholistic approach of knowledge for the material prosperity through spiritual
                    refinement. Qualitative and vocational skills, extra-curricular and co-curricular activities and research
                    based teaching- learning approaches are the major features that we emphasize in order to ignite the
                    latent potentials of the students. Characterized with a committed and diligent team of intellectuals, we
                    pride in the academic success from the Montessori to the post graduate levels, whose proficiency is time
                    and again enhanced by the trained instructors equipped with the sound knowledge of Technology and
                    the most updated genres of the curriculum. Apart from these, imparting the pragmatic aspects of learning
                    through socialization; i.e. familiarization of the recent status of the society with the first hand researcher is
                    the prime concern of our institution

                </p>
            </div>
        </div>
        <div class="col-md-4 right-img-abt">
            <div class="abt-princi-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/bhesh.png)"></div>
            <div class="princi-name">Mr Bhesh Raj Pokhrel</div>
            <small>CEO</small>
        </div>
    </div>
</section>

<section id="genres">
    <div class="row curri">
        <div class="col-md-6">
            <h2>Curriculum</h2>

            <p>
                The school fully adopts the
                national curricular text books
                prescribed by the Government
                of Nepal. Some of the additional
                books have been included as
                references to provide a wider
                learning opportunity for
                students.
            </p>

        </div>
        <div class="col-md-6">
            <div class="curri-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/about/curri.png)"></div>
        </div>
    </div>

    <div class="row mont">
        <div class="col-md-6">
            <div class="curri-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/about/mont.png)"></div>
        </div>
        <div class="col-md-6">
            <h2>Texas Montessori School</h2>
            <p>
                A strong foundation builds a durable house.
                The buds today require a smooth care,
                nurturing with love and compassion. Keeping
                it in mind, Texas Montessori School aims at
                flourishing the pupils in a congenial academic
                atmosphere, featured with the child-friendly
                teaching learning strategies implemented
                through highly experienced, trained and
                dynamic teachers, who cater the approaches
                at the most suitable infrastructure; i.e. spacious
                rooms, play grounds, play station, nurse room,
                audio visual lab, a cafeteria with hygienic
                food etc.
            </p>
        </div>
    </div>

    <div class="row secondary">
        <div class="col-md-6">
            <h2>Secondary School</h2>
            <p>
                The school has a well-managed and
                well-equipped computer lab for the
                students from grade I to XII & a separate
                computer lab for the pre-primary level.
                Every section of the school has been fully
                computerized. The school provides a
                computer based attendance system,
                library, evaluation process and accounting.
                We are equipped with reliable networking
                systems among all the computers. To name
                a few, computerbased teaching methodology,
                online examination, SMS information,
                internet/email facilities are provided to
                the students. Digitalized curricular and
                co-curricular activities have been
                arranged in order to acquaint the pupils
                with the latest pedagogy
            </p>
        </div>
        <div class="col-md-6">
            <div class="curri-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/about/secondary.png)"></div>
        </div>
    </div>

</section>


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