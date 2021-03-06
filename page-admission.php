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
            <div>
                <h1>Welcome to Texas Int'l S. School Admission Session</h1>
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
        <div class="col-md-4"></div>
    </div>
</section>



<?php
while (have_posts()) : the_post();

    get_template_part('template-parts/content', 'page');

endwhile; // End of the loop.
?>



<?php
get_footer();
