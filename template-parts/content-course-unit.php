<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package celebrationhealth
 */

//Store the Parent Data for the Unit for use.
$unit_parent_data = WPCW_units_getAssociatedParentData($post->ID);

global $current_i4_user;

$user_id = $current_i4_user->ID;

$video_id = get_post_meta( $post->ID, 'video-id', true ); //Grab the Video ID for displaying in the Vimeo iFrame
$video_length = get_post_meta( $post->ID, 'video-length', true ); //Grab the Video length for displaying in the video details
$video_description = get_post_meta( $post->ID, 'video-description', true ); //Grab the Video Description


//var_dump($unit_parent_data);

//Check if the Unit is complete
$unit_status = I4Web_LMS()->i4_wpcw->i4_is_unit_complete( $unit_parent_data->course_id, $user_id, $post->ID );

//Retrieve the Course Coordinator information
$i4_course_coordinator = I4Web_LMS()->i4_coordinators->i4_lms_get_coordinator( $unit_parent_data->course_id );
$i4_coordinator_name = $i4_course_coordinator->display_name;
$i4_coordinator_email = $i4_course_coordinator->user_email;
$i4_coordinator_img  = get_user_meta($i4_course_coordinator->ID, 'coordinator_img', true);

$i4_course_title = I4Web_LMS()->i4_coordinators->i4_get_course_title($unit_parent_data->course_id);

?>

<article id="post-<?php the_ID(); ?>" class="course-unit-wrapper">
  <div class="row">
    <div class="medium-8 large-8 columns video-content-wrapper">
      <div class="flex-video">
        <iframe id="unit-video" src="https://player.vimeo.com/video/<?php echo $video_id; ?>?api=1&amp;player_id=unit-video" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
      </div>
      <div class="video-controls-wrapper">
        <h3><?php echo get_the_title(); ?></h3>

        <?php if ( $video_description != ''){ ?>
          <p class="video-description"><?php echo $video_description; ?></p>
        <?php } ?>
      </div>
    </div> <!-- end .video-content-wrapper -->
    <div class="medium-4 large-4 columns video-details-wrapper">
      <h4 class="video-details-title">Unit Details</h4>
      <div class="row">
        <div class="course-coordinator-wrapper large-12 columns">
            <div class="course-coordinator-details">
              <div class="course-coordinator-img">
                <img src="<?php echo $i4_coordinator_img; ?>" alt="Coordinator Name" class="img-circle">
              </div>
                <h5><?php echo $i4_coordinator_name; ?> <br/><small>Coordinator, <?php echo $i4_course_title;?></small></h5>
                <a href="#" class="button grey tiny" data-reveal-id="askCoordinatorModal">Ask a Question</a>

                <div id="askCoordinatorModal" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
                    <p class="text-center"><img src="<?php echo $i4_coordinator_img; ?>" alt="<?php echo $i4_coordinator_name;?>" class="img-circle"></p>
                    <h5 class="text-center"><?php echo $i4_coordinator_name; ?><br/><small>Coordinator, <?php echo $i4_course_title;?></small></h5>
                  <p id="modalTitle" class="text-center">I'm here to assist you with any questions or concerns that you may have. Just fill out the form below to email me directly.</p>
                  <hr>
                  <?php echo do_shortcode( '[gravityform id="1" title="false" description="false" ajax="true" field_values="patient_username='.$current_i4_user->user_login.'&amp;coordinator_email='.$i4_coordinator_email.'&amp;user_email='.$current_i4_user->user_email.'&amp;user_displayname='.$current_i4_user->display_name.'"]' ); ?>
                  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
                </div>

            </div>
        </div>
      </div>

      <hr>

      <table class="video-details">
        <tr>
          <td><strong>Course</strong></td>
          <td><?php echo $unit_parent_data->course_title; ?></td>
        </tr>
        <tr>
          <td><strong>Unit</strong></td>
          <td><?php echo get_the_title(); ?></td>
        </tr>
        <tr>
          <td><strong>Length</strong></td>
          <td><?php echo I4Web_LMS()->i4_vimeo->get_duration($video_id); ?></td>
        </tr>
      </table>

      <?php echo I4Web_LMS()->i4_wpcw_front_end_unit->i4_lms_unit_actions(); ?>

    </div>
  </div> <!-- end row -->

<?php the_content(); ?>

</article>
