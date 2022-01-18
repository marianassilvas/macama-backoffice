<div class="grid">


<h1 class="tituloP"><?php the_title(); ?> </h1>

<?php
the_content();

?>
<div class="tagsdata">
<div class="tags">
<?php
the_tags();
?></div>

<div class="data">
<?php
the_date();
?></div>

</div>

</div>