  
  </main>
   
   <footer class="footer text-center bgone textmain pb-5 pt-5" style="clear: both;">
	 <div class="container col-10 col-lg-6  mx-auto">
		 <div class="row">
			 <div class="col-5 col-lg-3 mr-3 padding-0">
				 <ul class="padding-0">
					 <li class="under mb-2"><span class="dashicons dashicons-admin-links"></span>&nbsp;&nbsp;Site</li>						
					 <li><a href="<?php echo wp_make_link_relative( 'https://localhost/' ); ?>">HOME</a></li>
					 <li><a href="<?php echo wp_make_link_relative( 'https://localhost/forms' ); ?>">FORMS</a></li>
					 <li><a href="<?php echo wp_make_link_relative( 'https://localhost/about' ); ?>">ABOUT</a></li>
					 <li><a href="<?php echo wp_make_link_relative( 'https://localhost/blog' ); ?>">BLOG</a></li>
					 <li><a href="<?php echo wp_make_link_relative( 'https://localhost/contact' ); ?>">CONTACT</a></li>
				 </ul>
			 </div>
			 <div class="col-5 col-lg-3 mr-3 padding-0">
				 <ul class="padding-0">
					 <li class="under mb-2">&copy;&nbsp;&nbsp;Sport Club</li>
					 <li>D.C</li>
				 </ul>
			 </div>				
		 </div>
	 </div>
 </footer>

  <?php wp_footer(); ?>

</body>

</html>