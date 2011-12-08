		
	<?php get_header() ?>	
		
		
		<div id="container-mid">
			<div id="main">
				
				<div id="content">
				<img src="<?php bloginfo('template_url'); ?>/assets/img/contact.jpg" />
						<h3>News and Events: <span class="yellow">Fostering Research</span></h3>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> <!--Start the loop -->
					
					<div class="snippet">
						
						<h4><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
						<?php if ( has_post_thumbnail()) { ?> 
						<div class="thumbnail"><img src="<?php $image_id = get_post_thumbnail_id();
										$image_url = wp_get_attachment_image_src($image_id,’thumbnail’, true);
										echo $image_url[0];  ?>" align="left" height="75" width="75" /></div>
						<?php	} ?>
						
						<?php the_excerpt() ?>
			
					</div><!--End snippet -->
					
					<?php endwhile; ?>
						<div class="pagination"><?php ksascamp_pagination('«', '»'); ?></div>
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