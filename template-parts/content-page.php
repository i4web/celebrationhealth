<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package celebrationhealth
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="page-content-wrapper">
    <div class="page-title"><h3><?php echo get_the_title();?></h3></div>
    <?php the_content(); ?>
  </div>

</article>
