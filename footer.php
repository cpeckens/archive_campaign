		<div id="container-foot">
			
			<div id="footer">
				
				<div id="footer-left">
					<p><a href="http://www.jhu.edu">Johns Hopkins University</a> | <a href="http://krieger.jhu.edu">Zanvyl Krieger School of Arts and Sciences</a></p>
					<?php if (is_front_page()) { ?>
					<?php get_sidebar('address-sb'); ?>
					<?php } ?>
					<small>&copy; Johns Hopkins University. All rights reserved.</small>
				</div>
				
				<div id="footer-right">
						<ul id="social-media">
							<li class="facebook"><a href="http://www.facebook.com"><span>Facebook</span></a></li>
							<li class="youtube"><span>YouTube</span</li>
							<li class="rss"><span>RSS</span></li>
						</ul>
				
				</div>
				
			</div> <!--End footer -->
			
			<div class="clearboth"></div> <!--to have background work properly -->
		
		</div> <!--End container-foot -->

	</body>
			
		<script src="<?php bloginfo('template_url'); ?>/assets/js/respond.min.js"></script>
		<script src="<?php bloginfo('template_url'); ?>/assets/js/ksascamp_accordion.js"></script>
		
		<!-- front-page specific scripts and css -->
		<?php if (is_front_page()) { ?>
			<script src="<?php bloginfo('template_url'); ?>/assets/js/smoothscroll.js"></script>
			<script src="<?php bloginfo('template_url'); ?>/assets/js/jquery.flexslider-min.js"></script>
		<?php } ?>
			
</html>

