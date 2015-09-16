<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package celebrationhealth
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="sidebar" class="large-3 columns my-course-wrapper" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
