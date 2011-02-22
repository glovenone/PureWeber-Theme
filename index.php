<?php get_header(); 
global $options;
foreach ($options as $value) {
	if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); }
}
?>
        	<div class="left"><!--left-->
        		<?php 
        		$Catid = get_cat_id(''. $MagZ_main_section .'');
        		$Featid = get_cat_id(''. $MagZ_feat_section .'');
        		query_posts('showposts=2&cat=-' . $Catid . ',-' . $Featid . '');
				  	if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>
            	<div class="post"><!--post-->
                    <div class="category"><?php the_category(', ') ?></div>
                    <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Read more on <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                    <div class="author"><em>By</em>: <strong><?php the_author() ?></strong></div>
                    <hr />
                    <p>
                    	 <?php the_content_rss('', TRUE, '', 80); ?> 
                    </p>
            	</div><!--post-->
               <?php endwhile; ?><?php endif; ?>
                
                <div class="featured">
                    <h2>Archive</h2>
                    <?php 
                    query_posts('showposts=' . $MagZ_archive_section_num .'&offset=3&cat=-' . $Catid . '');
				  	if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>
                    <div class="list">
                        <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Read more on <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                        <div class="category"><?php the_category(', ') ?></div>
                    </div>
                    <?php endwhile; ?><?php endif; ?>
                </div>
                
            </div><!--left-->
            <div class="right"><!--right-->
            	<div class="focus">
                	<img src="<?php bloginfo(template_url);?>/images/banner.jpg" width="658" height="246" />
                </div>
                <div class="main"><!--main-->
                	<?php query_posts('showposts=' . $MagZ_main_section_num . '&category_name=' . $MagZ_main_section . '');
				  	if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>
                	<div class="post"><!--post-->
                        <div class="category"><?php the_category(', '); ?></div>
                        <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Read more on <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                        <div class="author"><em>By</em>: <strong><?php the_author() ?></strong></div>
                        <hr />
                        <p>
                            <?php the_content_rss('', TRUE, '', 140); ?> 
                        </p>
            		</div><!--post-->
                    <?php endwhile; ?><?php endif; ?>
                    
                    <div class="featured">
                    	<h2><?php echo $MagZ_feat_section ?></h2>
                    	<?php query_posts('showposts=' . $MagZ_feat_section_num . '&category_name=' . $MagZ_feat_section . '');
				  		if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>
                        <div class="list">
                        
                        	<div class="thumb">
                        	<?php 
                        		if (function_exists('gi_thumbnail')) {
								echo gi_thumbnail();
								}
								else {
								$images =& get_children( 'post_type=attachment&post_mime_type=image&post_parent=' . $post->ID );
	$firstImageSrc = wp_get_attachment_image_src(array_shift(array_keys($images)));
	echo "<img src=\"{$firstImageSrc[0]}\" width=\"50\" height=\"50\" />";
								}
                        	?>
                        	</div>
                        	
                        	<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Read more on <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                            <div class="category"><?php the_category(', '); ?></div>
                            <div class="ffix"></div>
                        </div>
                        <?php endwhile; ?><?php endif; ?>
                    </div>
                    
                </div><!--main-->
                <div class="sidebar">
					   <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('home widget') ) : ?>
					   <li id="about">
						<h2>Widget Area</h2>
						<p>This is widget area, add your widget here from your widget on appereance on your admin panel</p>
					   </li>
					   
					  <?php endif; ?>
                </div>
            </div><!--right-->
            <div class="ffix"></div>
<?php get_footer(); ?>

