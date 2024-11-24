 

<h3><?php the_title(); ?></h3>
<div class="thumbnail-img"><?php the_post_thumbnail('large'); ?></div>
<small>Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?>, in <?php the_category( ' ' ); ?></small>
 <?php 
              $terms_list = wp_get_post_terms($post->ID, 'field'); 
              $i = 0;
              foreach( $terms_list as $term){
                $i++;
                if($i > 1){
                  echo ', ';
                }
                echo $term->name;
              }
            ?> || <?php the_tags(); ?> || <?php edit_post_link(); ?>
<p><?php the_content(); ?></p>
<hr>



