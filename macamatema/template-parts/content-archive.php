<!-- works page -->

<div class="grade">

<div class="imgcontainer">
        <a href="<?php the_permalink();?>">
        
        <img class="img-gal" src="<?php the_post_thumbnail_url('large');?>" alt="lapalisse" width="100%">
       
        <div class="hover-img">
          <p class="img-text"><?php the_title(); ?></p></br>
          <p class="img-text"><?php  the_excerpt(); ?></p></br>
          <p class="img-text number"><?php  the_date(); ?></p></br></a>
         </div>
 </div>

 </div>
</div>
