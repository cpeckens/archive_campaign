	<?php get_header() ?>	
	
	<div id="slider-holder">
		
		<div class="flexslider">
	   		 <ul class="slides">
	   		 	<li class="slide1">
	   		 		<div class="slide-holder">
	   				</div>
	   		 	</li>
	   		 </ul>
	    <div class="clearboth"></div> <!--to have background work properly -->
	  </div> <!--End flexslider-->
		<div class="clearboth"></div> <!--to have background work properly -->
	  </div> <!--End slider-holder-->	

	    <div id="container-mid">
	    	<div id="homepage">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> <!--Start the loop -->
										
												
						<?php the_content() ?>
			
					
					<?php endwhile; else: ?>
						<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
					<?php endif; ?>
	    		
	    		
	    		<div class="clearboth"></div> <!--to have background work properly -->
	    	</div> <!--End homepage -->
	    		
		</div> <!--End container-mid -->
		
		
			<div id="nav_area" data-position="fixed">   <!-- <div id="nav_area" onclick="AppearEffect(this);"> -->        
					<?php wp_nav_menu( array( 'theme_location' => 'homepage-menu' ) ); ?>
	            </div>  
            </div>
	<?php get_footer() ?>