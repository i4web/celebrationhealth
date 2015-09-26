<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package celebrationhealth
 */

//Store the Parent Data for the Unit for use.
$unit_parent_data = WPCW_units_getAssociatedParentData($post->ID);

$user_id = get_current_user_id();

$video_id = get_post_meta( $post->ID, 'video-id', true ); //Grab the Video ID for displaying in the Vimeo iFrame
$video_length = get_post_meta ( $post->ID, 'video-length', true ); //Grab the Video length for displaying in the video details


//var_dump($unit_parent_data);

//Check if the Unit is complete
$unit_status = I4Web_LMS()->i4_wpcw->i4_is_unit_complete( $unit_parent_data->course_id, $user_id, $post->ID );

?>

<article id="post-<?php the_ID(); ?>" class="unit-content">
  <h3><?php echo get_the_title(); ?></h3>
  <p class="unit-details">This is a brief description that will be created via metadata</p>
  <div class="row">
    <div class="large-8 columns video-content-wrapper">
      <div class="flex-video">
        <iframe src="https://player.vimeo.com/video/<?php echo $video_id; ?>" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
      </div>
    </div> <!-- end .video-content-wrapper -->
    <div class="large-4 columns video-details-wrapper">
      <h4 class="video-details-title">Video Details</h4>
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
          <td><?php echo $video_length; ?></td>
        </tr>
      </table>

<?php echo I4Web_LMS()->i4_wpcw_front_end_unit->i4_lms_unit_actions(); ?>

    </div>
  </div> <!-- end row -->

<?php the_content(); ?>

</article>
