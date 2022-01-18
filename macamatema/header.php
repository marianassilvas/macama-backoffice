<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
 
  
  <?php
  wp_head();
  ?>
</head>
<body>
<header>

    <!---nav de cima -------------------->
    <nav class="topnavbar"> 
      <a href="<?php echo home_url(); ?>">
      <h1 id="titulo"> 
          <?php echo get_bloginfo('name'); ?>
         </h1></a>

      <div class="container-nav">

<?php
wp_nav_menu(
    array(
        'menu' => 'primary',
        'container' => '',
        'theme_location' => 'primary',
        'items_wrap' => '<ul id="" class="">%3$s</ul>'
    )
    );
?>

      </div>

      <div class="subtitulos" id="search">
        <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="">
          <path id="lupa" d="M10.8333 18.4167C15.0215 18.4167 18.4167 15.0215 18.4167 10.8333C18.4167 6.64517 15.0215 3.25 10.8333 3.25C6.64517 3.25 3.25 6.64517 3.25 10.8333C3.25 15.0215 6.64517 18.4167 10.8333 18.4167Z" stroke="black"
            stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round" />
          <path d="M22.75 22.75L16.25 16.25" stroke="black" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </div>


    </nav>
  </header>