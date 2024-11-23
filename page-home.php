 <?php get_header(); ?>

<div class="row">

 <div class="col-sm-12">
  <?php 

    $args_cat = array(
      'include' => '85, 82, 79'
    );

    $categories = get_categories($args_cat);
    foreach ($categories as $category) :

    endforeach;

    $args = array(
      'type' => 'post',
      'posts_per_page' => 3,
      'category__in' => array(85, 82, 79 ),
      'category__not_in' => array(8)
    );

    $lastBlog = new WP_Query($args);

    if($lastBlog->have_posts()) : 

      while( $lastBlog->have_posts() ) : $lastBlog->the_post(); ?> 
    
        <?php get_template_part('content', 'featured'); ?>
    
      <?php endwhile;
    
    endif;

    wp_reset_postdata();
    
  ?>
 </div>

 <div class="col-sm-8">
  <?php 
  if(have_posts()) : 

    while( have_posts() ) : the_post(); ?> 
    
      <?php get_template_part('content', get_post_format()); ?>
    
    <?php endwhile;
    
  endif;
  ?>
 </div>

 
  <div class="col-sm-4">
    <?php get_sidebar(); ?>
  </div>

</div> <!--========= row ==========-->


<?php get_footer(); ?>


