<?php
/**
 * The template used for displaying the manage patients f
 *
 * @package celebrationhealth
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="page-content-wrapper">
    <div class="page-title"><h3><?php echo get_the_title();?> <span><a href="#" class="button tiny blue">Add New Patient</a></h3></div>

    <table>
      <thead>
        <tr>
          <th>Patient Username</th>
          <th>Patient Email</th>
          <th>Patient Courses</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>jrivera</td>
          <td>jrivera@i-4web.com</td>
          <td>Spine Surgery</td>
          <td><a href="#">Delete Patient</a> <br> <a href="#">Remove Courses</a></td>
        </tr>
        <tr>
          <td>cruiz</td>
          <td>cruiz@i-4web.com</td>
          <td>Bariatric Surgery <br> Spine Surgery</td>
          <td><a href="#">Delete Patient</a> <br> <a href="#">Remove Courses</a></td>
        </tr>
      </tbody>
    </table>
  </div>

</article>
