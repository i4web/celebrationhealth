<?php
 /**
 * Unit Template Name: Quiz Template
 *
 * This template is to be used for all units that include a test.
 * @package celebrationhealth
 */

 /**
  * The Course Unit template file for celebrationhealth.
  *

  */

 get_header(); ?>


 <div class="page-wrapper">

   <main id="main" class="site-main" role="main"> <!-- role="main" added for ARIA compatibility on Internet Explorer -->
     <div class="row">
 				<div class="large-12 columns small-centered" role="content">

     <?php while ( have_posts() ) : the_post(); ?>

       <?php get_template_part( 'template-parts/content', 'course-unit-quiz' ); ?>

     <?php endwhile; // End of the loop. ?>
   </div> <!-- end . large-12 columns -->
     </div> <!-- end .row -->
   </main>

 </div> <!-- end .page-wrapper -->

 <?php get_footer(); ?>
