<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package celebrationhealth
 */


$i4_post_title = get_the_title();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="page-content-wrapper">
    <div class="post-title">
        <h3><?php echo $i4_post_title; ?></h3>
        <?php echo i4_lms_posted_on(); ?>
    </div>
      <div class="featured-img-wrapper">
      <?php if ( has_post_thumbnail() ) {
          $post_featured_img = get_the_post_thumbnail( get_the_ID(), 'full' );
          echo $post_featured_img;
      } ?>
      </div>


    <?php the_excerpt(); ?>
    <a href="<?php echo get_the_permalink();?>" class="read-more" title="<?php echo $i4_post_title; ?>">Read More</a>
  </div>

</article>
