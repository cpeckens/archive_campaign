<?php get_header() ?>	
		
		
		<div id="container-mid">
			<div id="main">
				
		
				<div id="content">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> <!--Start the loop -->
					
						
						
						
						<h2><?php the_title() ?></h2>
						
						<div class="news-item"><?php if ( has_post_thumbnail()) { ?> 
						<img src="<?php $image_id = get_post_thumbnail_id();
										$image_url = wp_get_attachment_image_src($image_id,’page-image’, true);
										echo $image_url[0];  ?>" />
						<?php	} ?>
						<?php the_content() ?>
						</div>
			
					
					<?php endwhile; else: ?>
						<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
					<?php endif; ?>
				
				</div> <!--End content -->		
				<div class="clearboth"></div> <!--to have background work properly -->
			</div> <!--End main -->
			
		</div> <!--End container-mid -->
				<div id="nav_area" data-position="fixed">   <!-- <div id="nav_area" onclick="AppearEffect(this);"> -->        
					<?php wp_nav_menu( array( 'theme_location' => 'subpage-menu' ) ); ?>
	            </div>  
            </div>
	
	
	<?php get_footer() ?>