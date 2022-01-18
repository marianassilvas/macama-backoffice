<!-- para páginas estáticas (sem arquivo.. como o about e a info) -->



<?php
get_header();
?>
  <main>
    
  <div class="grid">


   <h1 class="tituloP"><?php the_title(); ?> </h1>
      
   
   <?php

   if( have_posts() ){

    while( have_posts() ){

      the_post();
      get_template_part('template-parts/content','page');
    }


   }
   ?>

   
  </div>
   </main>

   <?php
get_footer();
   ?>

  