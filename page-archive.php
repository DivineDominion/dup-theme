<?php
/*
Template Name: Archive
*/

get_header(); ?>
      <div id="content">
        <div id="inner-content" class="wrap clearfix">
          
            <?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>
            <div id="main" class="eightcol first clearfix" role="main">
            <?php else: ?>
            <div id="main" class="twelvecol first clearfix" role="main">
            <?php endif; ?>
        
              <div class="archives-by-month-section">
                <?php 
                $wp_query = new WP_Query(array(
                  'post_type' => 'post', 
                  'posts_per_page' => -1  // All Posts
                )); 
                while ( $wp_query->have_posts() ) {
                  $wp_query->the_post();
  
                  $current_month = get_the_date('F');

                  if( $wp_query->current_post === 0 ) {
                     the_date('F Y', '<h2>', '</h2>');
                     echo('<ul class="archive-by-month">');
                  } else {
                      $f = $wp_query->current_post - 1;
                      $old_date = mysql2date('F', $wp_query->posts[$f]->post_date);

                      if($current_month != $old_date) {
                          echo('</ul>');
                          the_date('F Y', '<h2>', '</h2>');
                          echo('<ul class="archive-by-month">');
                      }
                  }

                  the_title( '<li><a href="' . get_permalink() . '">', '</a></li>');
                }
                ?>
                </ul><!-- close UL from while loop -->
              </div>
            </div> <!-- end #main -->

            <?php get_sidebar(); ?>

        </div> <!-- end #inner-content -->

      </div> <!-- end #content -->

<?php get_footer(); ?>
