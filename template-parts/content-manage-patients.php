<?php
/**
 * The template used for displaying the manage patients f
 *
 * @package celebrationhealth
 */

?>

<?php $patients =  I4Web_LMS()->i4_wpcw->i4_get_patients(); //Retrieve the patients from the database ?>

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
        <?php foreach($patients as $patient){ //loop through each of the patients
           $patient_courses = I4Web_LMS()->i4_wpcw->i4_get_assigned_courses($patient->ID); //Retrieve the assigned courses for the patient
          ?>
          <tr>
            <td><?php echo $patient->user_login;?></td>
            <td><?php echo $patient->user_email;?></td>
            <td><?php var_dump($patient_courses);?></td>
            <td><a href="#">Delete Patient</a> <br> <a href="#">Remove Courses</a></td>
          </tr>

        <?php } ?>
      </tbody>
    </table>
  </div>

</article>
