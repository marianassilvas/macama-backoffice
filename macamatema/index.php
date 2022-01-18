<!-- /**posts*/ -->

<!-- single blog posts -->


<?php
get_header();
?>
  <main>
    
      <h1> <?php echo get_bloginfo('name'); ?></h1>
      
   
   <?php

   if( have_posts() ){

    while( have_posts() ){

      the_post();
      get_template_part('template-parts/content','archive');
    }


   }
   ?>

   
 
   </main>

   <?php
get_footer();
   ?>

  