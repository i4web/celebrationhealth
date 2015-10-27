<?php
/**
 * The 404 page template file for celebrationhealth.
 *
 * @package celebrationhealth
 */

get_header(); ?>

<div class="page-wrapper">

  <main id="main" class="site-main" role="main"> <!-- role="main" added for ARIA compatibility on Internet Explorer -->
    <div class="row">
				<div class="large-12 columns content-wrapper" role="content">

          <?php get_template_part( 'template-parts/content', '404' ); ?>


        </div> <!-- end . large-12 columns -->

    </div> <!-- end .row -->
  </main>

</div> <!-- end .page-wrapper -->

<?php get_footer(); ?>
