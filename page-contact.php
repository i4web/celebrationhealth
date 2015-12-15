<?php
/**
 * Template Name: Contact
 *
 * Template for the Contact page
 *
 * @package celebrationhealth
 */

 get_header();

//Retrieve the Course Coordinator information
global $current_i4_user;
$user_id = $current_i4_user->ID;
$patient_courses = I4Web_LMS()->i4_wpcw->i4_get_assigned_courses($user_id);

$counter = 0; //set a counter
$patient_course_id = 0; //initialize the course id to 0

    foreach ($patient_courses as $course_id => $course_title) {
        if($counter == 0 ){  //only store the first course id in the array since the first result is the most recent course the user has been enrolled in
            $patient_course_id = $course_id; //set the course id
        }
        $counter++;
    }

$i4_course_coordinator = I4Web_LMS()->i4_coordinators->i4_lms_get_coordinator( $patient_course_id );
$i4_coordinator_name = $i4_course_coordinator->display_name;
$i4_coordinator_email = $i4_course_coordinator->user_email;
$i4_coordinator_img  = get_user_meta($i4_course_coordinator->ID, 'coordinator_img', true);

 ?>

<div class="page-wrapper">

    <main id="main" class="site-main" role="main"> <!-- role="main" added for ARIA compatibility on Internet Explorer -->
        <div class="row">
            <div class="large-9 columns content-wrapper content-wrapper" role="content">
        <?php while ( have_posts() ) : the_post(); ?>

          <?php get_template_part( 'template-parts/content', 'page' ); ?>

        <?php endwhile; // End of the loop. ?>
            </div> <!-- end . large-12 columns -->

             <!-- Display Sidebar Contact Us -->
            <div id="sidebar" class="large-3 columns" role="complementary">
            <aside id="i4web_lms_announcements_widget-2" class="widget widget_i4web_lms_announcements_widget my-course-wrapper">
                <h3 class="widget-title">How can I assist you?</h3>
                <div class="course-coordinator-details">
                    <div class="course-coordinator-img">
                      <img src="<?php echo $i4_coordinator_img; ?>" alt="Coordinator Name" class="img-circle">
                    </div>
                      <h5><?php echo $i4_coordinator_name; ?> <br/><small>Course Coordinator</small></h5>
                      <a href="#" class="button grey tiny" data-reveal-id="askCoordinatorModal">Ask a Question</a>

                      <div id="askCoordinatorModal" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
                          <p class="text-center"><img src="<?php echo $i4_coordinator_img; ?>" alt="<?php echo $i4_coordinator_name;?>" class="img-circle"></p>
                          <h5 class="text-center"><?php echo $i4_coordinator_name; ?><br/><small>Course Coordinator</small></h5>
                        <p id="modalTitle" class="text-center">I'm here to assist you with any questions or concerns that you may have. Just fill out the form below to email me directly.</p>
                        <hr>
                        <?php echo do_shortcode( '[gravityform id="1" title="false" description="false" ajax="true" field_values="patient_username='.$current_i4_user->user_login.'&amp;coordinator_email='.$i4_coordinator_email.'&amp;user_email='.$current_i4_user->user_email.'&amp;user_displayname='.$current_i4_user->display_name.'"]' ); ?>
                        <a class="close-reveal-modal" aria-label="Close">&#215;</a>
                      </div>
                </div>
            </aside>
            </div>




        </div> <!-- end .row -->
    </main>

</div> <!-- end .page-wrapper -->



<?php get_footer(); ?>
