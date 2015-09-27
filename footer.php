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
