			<div class="single-sidebar">
            	<ul>
                   <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('detail widget') ) : ?>
					   <li id="about">
						<h2>Widget Area</h2>
						<p>This is widget area, add your widget here from your widget on appereance on your admin panel</p>
					   </li>
					   
					  <?php endif; ?>
                </ul>
            </div>