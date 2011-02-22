<?php get_header(); ?>

        	<div class="single-main"> <!--Single-Main-->
        		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        		
            	<h2><?php the_title(); ?></h2>
                <div class="author"><em>Oleh</em>: <strong><?php the_author() ?></strong></div>
                <div class="date"><?php the_date(); ?></div>
                <hr />
                
                <?php the_content(); ?>
                
                
                <?php the_tags( '<p class="tags">Tags: ', ', ', '</p>'); ?>
                
                <div class="navigation-post">
					<div class="alignleft"><?php previous_post_link('&laquo; %link') ?></div>
					<div class="alignright"><?php next_post_link('%link &raquo;') ?></div>
				</div>
                
                <?php endwhile; else: ?>
				<p>Sorry, no posts matched your criteria.</p>
				<?php endif; ?>
            
            <!--
            <div class="author-detail">
            	<h5>Tentang Penulis</h5>
                <p>
                	<?php echo get_avatar( get_the_author_email(), '60', 'http://example.com/no_avatar.jpg' ); ?><a href="<?php the_author_url(); ?>"><strong><?php the_author();?></strong></a> - <?php the_author_description(); ?>
                </p>
            </div>
            -->
            
            <div class="post-data">
        
						Category: <?php the_category(', ') ?> | <?php post_comments_feed_link('RSS 2.0'); ?>

						<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
							// Both Comments and Pings are open ?>
							| <a href="#respond">Give a Comment</a> | <a href="<?php trackback_url(); ?>" rel="trackback">trackback</a>

						<?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
							// Only Pings are Open ?>
							Responses are currently closed, but you can <a href="<?php trackback_url(); ?> " rel="trackback">trackback</a> from your own site.

						<?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
							// Comments are open, Pings are not ?>
							You can skip to the end and leave a response. Pinging is currently not allowed.

						<?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
							// Neither Comments, nor Pings are open ?>
							Both comments and pings are currently closed.

						<?php } edit_post_link('Edit this entry','','.'); ?>
            </div>
            
            <div class="comments">
            	<h4><?php comments_number('No Comments', 'One Comments', '% Comments' );?></h4>
            	

            	<?php comments_template(); ?>

                
            </div>
            
            </div><!--Single-Main-->
            <?php get_sidebar(); ?>
            <div class="ffix"></div>
        <?php get_footer(); ?>