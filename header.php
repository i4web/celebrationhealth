<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section
 *
 * @package celebrationhealth
 */ ?>

 <!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <div class="i4-site-wrapper">

      <?php $i4_settings = get_option( 'i4-lms-settings' ); //Retrieve the i4 LMS Settings
            $nav_logo = esc_attr( $i4_settings['i4-lms-nav-logo'] );
       ?>

      <!-- Begin Navbar -->
      <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <a href="#" class="nav-logo" title="<?php echo get_bloginfo('title');?>"><img src="<?php echo $nav_logo;?>"/></a>
        </li>
         <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
        <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
      </ul>

      <section class="top-bar-section">
        <!-- Right Nav Section -->
        <ul class="right">
          <li class="active"><a href="<?php echo  get_home_url(); ?>" title="View Assigned Courses">My Courses</a></li>
          <li><a href="#">Menu 2</a></li>
          <li><a href="#">Menu 3</a></li>

          <li class="has-dropdown">
            <a href="#">Welcome, Jonathan</a>
            <ul class="dropdown">
              <li><a href="#">Your Profile</a></li>
              <li><a href="#">Logout</a></li>
            </ul>
          </li>
        </ul>
      </section>
    </nav>
