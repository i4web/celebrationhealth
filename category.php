<?php
/**
 * The main template file for celebrationhealth.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
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
