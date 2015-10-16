<?php
/**
 * The template for displaying the footer.
 *
 * @todo Describe what this file contains
 *
 * @package celebrationhealth
 */ ?>

 <footer>
   <div class="footer-wrapper">
     <p class="tagline"><?php echo get_bloginfo('description'); ?></p>
     <div class="creation-health-logo">
         <img src="http://creationhealth.com/Portals/1/logo_CreationHealth.png">
         <br>
     </div>
    <div class="creation-health-acronym-wrapper">
      <span class="creation-acronym creation-green has-tip tip-top" data-tooltip aria-haspopup="true" title="CHOICE - Make Wise Decisions for Healthy Living">C</span>
      <span class="creation-acronym creation-orange has-tip tip-top" data-tooltip aria-haspopup="true" title="REST - Enjoy Replenishing Sleep and Relaxation">R</span>
      <span class="creation-acronym creation-green has-tip tip-top" data-tooltip aria-haspopup="true" title="ENVIRONMENT - Create a Nurturing, Rejuvenating Surrounding">E</span>
      <span class="creation-acronym creation-orange has-tip tip-top" data-tooltip aria-haspopup="true" title="ACTIVITY - Put Your Body in Motion">A</span>
      <span class="creation-acronym creation-pink has-tip tip-top" data-tooltip aria-haspopup="true" title="TRUST - Express Your Faith in God">T</span>
      <span class="creation-acronym creation-red has-tip tip-top" data-tooltip aria-haspopup="true" title="Interpersonal Relationships - Celebrate Friends and Family">I</span>
      <span class="creation-acronym creation-blue has-tip tip-top" data-tooltip aria-haspopup="true" title="OUTLOOK - Practice a Positive, Happy Attitude">O</span>
      <span class="creation-acronym creation-purple has-tip tip-top" data-tooltip aria-haspopup="true" title="NUTRITION - Fuel Your Body For Health and Wellness">N</span>
    </div>

     <p class="copyright">&copy; <?php echo date('Y');?>. Celebration Health. All Rights Reserved. <a href="#">Privacy Policy</a> | <a href="#">Support</a></p>
   </div>
 </footer>

 </div> <!-- end .i4-site-wrapper -->

 <?php wp_footer(); // this is necessary for the theme to function ?>

  <script>
  jQuery(document).foundation();
  </script>
</body>
</html>
