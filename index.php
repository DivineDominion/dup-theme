<?php get_header(); ?>

      <div id="content">

        <div id="inner-content" class="wrap clearfix">

            <?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>
            <div id="main" class="eightcol first clearfix" role="main">
            <?php else: ?>
            <div id="main" class="twelvecol first clearfix" role="main">
            <?php endif; ?>

              <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

              <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

                <header class="article-header">

                  <h1 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                  <?php dp_print_byline(); ?>

                </header> <!-- end article header -->

                <section class="entry-content clearfix">
                  <?php the_content(); ?>
                </section> <!-- end article section -->

                <footer class="article-footer">
                  <p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'bonestheme') . '</span> ', ', ', ''); ?></p>

                </footer> <!-- end article footer -->

                <?php // comments_template(); // uncomment if you want to use them ?>

              </article> <!-- end article -->

              <?php endwhile; ?>

                  <?php if (function_exists('bones_page_navi')) { ?>
                      <?php bones_page_navi(); ?>
                  <?php } else { ?>
                      <nav class="wp-prev-next">
                          <ul class="clearfix">
                            <li class="prev-link"><?php next_posts_link(__('&laquo; Older Entries', "bonestheme")) ?></li>
                            <li class="next-link"><?php previous_posts_link(__('Newer Entries &raquo;', "bonestheme")) ?></li>
                          </ul>
                      </nav>
                  <?php } ?>

              <?php else : ?>

                  <article id="post-not-found" class="hentry clearfix">
                      <header class="article-header">
                        <h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
                    </header>
                      <section class="entry-content">
                        <p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
                    </section>
                    <footer class="article-footer">
                        <p><?php _e("This is the error message in the index.php template.", "bonestheme"); ?></p>
                    </footer>
                  </article>

              <?php endif; ?>

            </div> <!-- end #main -->

            <?php get_sidebar(); ?>

        </div> <!-- end #inner-content -->

      </div> <!-- end #content -->

<?php get_footer(); ?>
