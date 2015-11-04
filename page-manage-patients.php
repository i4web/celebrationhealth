<?php
/**
 * Template Name: Manage Patients
 *
 * Template for the Manage Patients page
 *
 * @package celebrationhealth
 */

 get_header(); ?>

 <div class="page-wrapper">

   <main id="main" class="site-main" role="main"> <!-- role="main" added for ARIA compatibility on Internet Explorer -->
     <div class="row">
 				<div class="large-12 columns content-wrapper" role="content">
  <?php   while ( have_posts() ) : the_post();
              if( current_user_can( 'manage_patients' )){
                get_template_part( 'template-parts/content', 'manage-patients' );
              }
              else{
                get_template_part( 'template-parts/content', 'no-auth' );
              }

          endwhile; // End of the loop. ?>
   </div> <!-- end . large-12 columns -->

     </div> <!-- end .row -->
   </main>

 </div> <!-- end .page-wrapper -->



 <?php get_footer(); ?>
