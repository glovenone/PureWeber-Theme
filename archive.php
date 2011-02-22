<?php get_header(); ?>

        	<div class="single-main cat"> <!--Single-Main-->
        		<?php if (have_posts()) : ?>
        			<h2>Archive for &quot;<?php single_cat_title(); ?>&quot;</h2>
        		<?php while (have_posts()) : the_post(); ?>
            	<div class="list">
                        <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Read more on <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                </div>
                <?php endwhile; else: ?>
				<p>Sorry, no posts matched your criteria.</p>
				<?php endif; ?>
            	<div class="navigation">
					<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
					<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
				</div>
            
            </div><!--Single-Main-->
            <?php get_sidebar(); ?>
            <div class="ffix"></div>
        <?php get_footer(); ?>