<?php
/**
 * The category template file for celebrationhealth. This template displays all posts from a particular category
 *
 *
 * @package celebrationhealth
 */

get_header(); ?>

<div class="page-wrapper">
  <main id="main" class="site-main" role="main"> <!-- role="main" added for ARIA compatibility on Internet Explorer -->
    <div class="row">
				<div class="large-9 columns content-wrapper" role="content">
          <h4 class="category-title">Category: <?php single_cat_title(); ?></h4>

    <?php while ( have_posts() ) : the_post(); ?>

      <?php get_template_part( 'template-parts/content', 'index' ); ?>

    <?php endwhile; // End of the loop. ?>

        <?php wp_pagenavi(); ?>

        </div> <!-- end . large-9 columns -->

        <?php get_sidebar(); //display the sidebar ?>

    </div> <!-- end .row -->
  </main>

</div> <!-- end .page-wrapper -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
