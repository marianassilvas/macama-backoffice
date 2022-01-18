
<?php
get_header();
?>
  <main>
    <div class="banner" >
      <div class="bola"></div>
       <div class="letreiro">
      <h1> <?php echo get_bloginfo('name'); ?></h1>
      <div id="linha"></div>

       </div>
  
     </div>
   
   <?php

   if( have_posts() ){

    while( have_posts() ){

      the_post();
      the_content();
    }


   }
   ?>

   
 
   </main>

   <?php
get_footer();
   ?>

  
   