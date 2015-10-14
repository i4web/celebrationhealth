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

      <?php
            global $current_i4_user;
            $i4_settings = get_option( 'i4-lms-settings' ); //Retrieve the i4 LMS Settings
            $nav_logo = esc_attr( $i4_settings['i4-lms-nav-logo'] );

            $i4_user_courses =  I4Web_LMS()->i4_wpcw->i4_get_assigned_courses( $current_i4_user->ID );

       ?>

      <!-- Begin Navbar -->
      <div class="sticky">
        <nav class="top-bar" data-topbar role="navigation" data-options="sticky_on: [small,medium,large]">
        <ul class="title-area">
          <li class="name">
            <a href="<?php echo get_bloginfo('url');?>" class="nav-logo" title="<?php echo get_bloginfo('title');?>"><img src="<?php echo $nav_logo;?>"/></a>
          </li>
           <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
          <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
        </ul>

        <section class="top-bar-section">
          <!-- Right Nav Section -->
          <ul class="right">
            <li class="active"><a href="<?php echo  get_home_url(); ?>" title="View Assigned Courses">My Courses</a></li>

            <?php foreach ($i4_user_courses as $i4_user_course){

              $course_permalink = sanitize_title($i4_user_course->course_title);

              echo '<li><a href="'.$course_permalink.'">'. $i4_user_course->course_title .'</a><li>';
            }

            ?>

            <li class="has-dropdown">
              <a href="#">Welcome, <?php echo $current_i4_user->first_name;?></a>
              <ul class="dropdown">
              <?php if( current_user_can( 'edit_pages' )){  //Add a link to the dashboard that only site admins can see ?>
                <li><a href="<?php echo admin_url();?>">Dashboard</a></li>
              <?php } ?>
              <?php if( current_user_can( 'edit_pages' ) && is_single() ){ ?>
                <li><a href="<?php echo get_edit_post_link();?>">Edit Page</a></li>
              <?php }?>

                <li><a href="/profile">Your Profile</a></li>
                <li><a href="<?php echo wp_logout_url( get_permalink() ); ?>">Logout</a></li>
              </ul>
            </li>
          </ul>
        </section>
      </nav>
    </div>
    <div class="banner-wrapper sticky sticky-div">
      <div data-alert id="completed-banner" class="alert-box success radius text-center">
        Congratulations! This video and unit has been completed! <span id="completed-next-link"></span>
        <a href="#" class="close">&times;</a>
      </div>
    </div> <!-- end .banner-wrapper -->
