 <?php 

 // silence is golden...

get_header(); ?>

<div class="row">
 <div class="col-sm-12">
  <?php 
  if(have_posts()) : 

    while( have_posts() ) : the_post(); ?> 
    
      <?php get_template_part('content', 'search'); ?>
    
    <?php endwhile;
    
  endif;
  ?>
 
 </div>





<!-- <div class="col-sm-4"> -->
  <?php // get_sidebar(); ?>
<!-- </div> -->

</div>


<?php get_footer(); ?>

