<?php
/**
 * The template for displaying the footer.
 *
 * @todo Describe what this file contains
 *
 * @package celebrationhealth
 */

 global $current_i4_user, $i4_settings;
 $nav_logo = esc_attr( $i4_settings['i4-lms-nav-logo'] );

 ?>

 <footer>
   <div class="footer-menu-wrapper">
     <div class="row">
         <div class="columns large-12">
         <div class="creation-health-acronym-wrapper columns">
           <h5>What is Creation Health?</h5>
           <span class="creation-acronym creation-green has-tip tip-top" data-tooltip aria-haspopup="true" title="CHOICE - Make Wise Decisions for Healthy Living">C</span>
           <span class="creation-acronym creation-orange has-tip tip-top" data-tooltip aria-haspopup="true" title="REST - Enjoy Replenishing Sleep and Relaxation">R</span>
           <span class="creation-acronym creation-green has-tip tip-top" data-tooltip aria-haspopup="true" title="ENVIRONMENT - Create a Nurturing, Rejuvenating Surrounding">E</span>
           <span class="creation-acronym creation-orange has-tip tip-top" data-tooltip aria-haspopup="true" title="ACTIVITY - Put Your Body in Motion">A</span>
           <span class="creation-acronym creation-pink has-tip tip-top" data-tooltip aria-haspopup="true" title="TRUST - Express Your Faith in God">T</span>
           <span class="creation-acronym creation-red has-tip tip-top" data-tooltip aria-haspopup="true" title="Interpersonal Relationships - Celebrate Friends and Family">I</span>
           <span class="creation-acronym creation-blue has-tip tip-top" data-tooltip aria-haspopup="true" title="OUTLOOK - Practice a Positive, Happy Attitude">O</span>
           <span class="creation-acronym creation-purple has-tip tip-top" data-tooltip aria-haspopup="true" title="NUTRITION - Fuel Your Body For Health and Wellness">N</span>
         </div>
       </div>
     </div>
   </div>
   <div class="footer-sub-menu-wrapper">
     <div class="row">
       <div class="columns large-8 footer-sub-left">
         <ul class="footer-sub-left-list">
           <li><a href="<?php echo get_bloginfo('url');?>/forms">Forms</a></li>
           <li><a href="<?php echo get_bloginfo('url');?>/maps">Maps</a></li>
           <li><a href="<?php echo get_bloginfo('url');?>/support">Support</a></li>
         </ul>
       </div>
       <div class="columns large-4 footer-sub-right">
         <img class="logo" src="<?php echo $nav_logo; ?>">
         <img class="logo" src="http://celebrationhealtheducation.com/wp-content/uploads/2015/10/creation-web-logo-sm.png">
         <div class="tagline-copyright-wrapper">
           <p class="tagline"><?php echo get_bloginfo('description'); ?></p>
           <p class="copyright">&copy; <?php echo date('Y');?>. Celebration Health. All Rights Reserved.</p>
         </div>
       </div>
     </div>

   </div>
 </footer>

 </div> <!-- end .i4-site-wrapper -->

 <?php wp_footer(); // this is necessary for the theme to function ?>

  <script>
  jQuery(document).foundation();
  </script>
</body>
</html>
