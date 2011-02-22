<?php get_header(); ?>

        	<div class="single-main"> <!--Single-Main-->
        		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            	<h2><?php the_title(); ?></h2>
                <div class="author"><em>Oleh</em>: <strong><?php the_author() ?></strong></div>
                <hr />
                
                <?php the_content(); ?>
                
                <?php endwhile; else: ?>
				<p>Sorry, no posts matched your criteria.</p>
				<?php endif; ?>
            
            
            
            </div><!--Single-Main-->
            <?php get_sidebar(); ?>
            <div class="ffix"></div>
        <?php get_footer(); ?>