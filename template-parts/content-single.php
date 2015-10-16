<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package celebrationhealth
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="page-content-wrapper">
      <div class="featured-img-wrapper">
      <?php if ( has_post_thumbnail() ) {
          $post_featured_img = get_the_post_thumbnail( get_the_ID(), 'full' );
          echo $post_featured_img;
      } ?>
      </div>
    <div class="post-title">
        <h3><?php echo get_the_title();?></h3>
        <?php echo i4_lms_posted_on(); ?>
    </div>
    <?php the_content(); ?>
  </div>

</article>
