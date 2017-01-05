<?php
/*
Template Name: Search Page
*/

get_header(); ?>
			<div id="content">
				<div id="inner-content" class="wrap clearfix">
          
            <?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>
						<div id="main" class="eightcol first clearfix" role="main">
            <?php else: ?>
						<div id="main" class="twelvecol first clearfix" role="main">
            <?php endif; ?>
                    
                <?php get_search_form(); ?>

						</div> <!-- end #main -->

						<?php get_sidebar(); ?>

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
