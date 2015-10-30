<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package celebrationhealth
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="page-content-wrapper">
    <div class="not-found-wrapper text-center">
      <img class="not-found-icon img-circle" src="<?php echo get_bloginfo('url');?>/wp-content/uploads/2015/10/fh-celebration-icon-thumb.png" />
      <h1>Page not found!</h1>
      <p>Sorry, but the page you were looking for could not be found</p>
      <p>You can return to the <a href="<?php echo get_bloginfo('url');?>">My Courses</a> dashboard or <a href="<?php echo get_bloginfo('url');?>/support">contact support</a> if you can't find what you're looking
        for</p>
    </div>
  </div>

</article>
