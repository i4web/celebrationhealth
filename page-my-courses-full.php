<?php
/**
 * Template Name: My Courses Fullwidth
 *
 * Template to display the Fullwidth My Courses Dashboard
 *
 * @package celebrationhealth
 */

 get_header(); ?>

<div class="page-wrapper">

  <main id="main" class="site-main" role="main"> <!-- role="main" added for ARIA compatibility on Internet Explorer -->
    <div class="row">
        <div class="large-12 columns content-wrapper" role="content">
    <?php while ( have_posts() ) : the_post(); ?>

      <?php get_template_part( 'template-parts/content', 'my-courses-page' ); ?>

    <?php endwhile; // End of the loop. ?>
        </div> <!-- end . large-12 columns -->
    </div> <!-- end .row -->
  </main>

</div> <!-- end .page-wrapper -->



<?php get_footer(); ?>
