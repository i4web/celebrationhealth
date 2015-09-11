<?php
/**
 * Default template for displaying all pages.
 *
 *
 * @package celebrationhealth
 */

 get_header(); ?>

<div class="page-wrapper">

  <main id="main" class="site-main" role="main"> <!-- role="main" added for ARIA compatibility on Internet Explorer -->
    <div class="row">
				<div class="large-9 columns" role="content">
    <?php while ( have_posts() ) : the_post(); ?>

      <?php get_template_part( 'template-parts/content', 'page' ); ?>

    <?php endwhile; // End of the loop. ?>
        </div> <!-- end . large-9 columns -->

        <?php get_sidebar(); //display the sidebar ?>

    </div> <!-- end .row -->
  </main>

</div> <!-- end .page-wrapper -->



<?php get_footer(); ?>
