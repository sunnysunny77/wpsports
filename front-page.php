<?php get_header(); ?>

<div id="front" class="container-fluid bgthree mx-auto pl-0 pr-0 " >		
	
	<div class="row m-0">
		
		<div class="col-12 padding-0 mb-5 move-in-down ">
		
			<h1 class="homet position-absolute textmain mt-5 mb-5 ml-4 move-in-right" >
				<?php the_title(); ?> <img src="<?php the_field("img_logo") ?>" alt="img logo" width="40" height="40">
			</h1> 

			<?php echo do_shortcode('[sp_wpcarousel id="217"]'); ?>

		</div>	
		
	</div>
	
	<div class="row m-0">
		
		<p class="col-10 col-lg-8 mx-auto padding-0 textmain text-center mb-5 fade-in-up  "><?php the_field("home_p_text"); ?></p>

		<hr class="col-12 padding-0 wp-block-separator has-text-color has-background has-vivid-red-background-color has-vivid-red-color is-style-dots mb-5" />
		
	</div>
	
	<div class="row m-0" >
		
			<div class="col-12 col-lg-8 mx-auto padding-0 mb-5">
				
				<div class="row m-0">
					
					<div class="col-12 col-lg-6 text-center mx-auto  mb-5">
						
						<figure class="wp-block-image size-large image-fluid is-style-rounded pl-1 pr-1 mb-5 fade-in-up  ">
							
							<img  src="<?php the_field("img_1") ?>" alt="img 2" width="363" height="212" />
							
						</figure>
						
						<div class="card mx-auto bgthree border-0 textmain mb-5 fade-in-up" style="width: 18rem;">
							
							<div class="card-body p-0" >
								 
								<h5 class="card-title textsec"> <?php the_field("card_title_1"); ?> </h5>
								<h6 class="card-subtitle textopc mb-2"> <?php the_field("card_sub_1"); ?> </h6>
								<p  class="textmain" style="height: 100px;"> <?php the_field("card_p_text_1"); ?> </p>
								<?php
									$link1 = get_field('link_1');
								?>
								<a  class="ah" href="<?php echo $link1['url']; ?>" target="<?php echo $link1['target']; ?>"> <?php echo $link1['title']; ?> </a>

							 </div>
							
						</div>		
						
					</div>
			
					<div class="col-12 col-lg-6 text-center mx-auto mb-5" >
						
						<figure class="wp-block-image size-large image-fluid is-style-rounded pl-1 pr-1 mb-5 fade-in-up ">
							
							<img  src="<?php the_field("img_2") ?>" alt="img 2" width="363" height="212"/>
							
						</figure>
						
						<div class="card mx-auto bgthree textmain border-0 mb-5 fade-in-up" style="width: 18rem;">
							
							<div class="card-body p-0">
								
								<h5 class="card-title textsec"> <?php the_field("card_title_2"); ?> </h5>
								<h6 class="card-subtitle textopc mb-2"> <?php the_field("card_sub_2"); ?> </h6>
								<p   class="card-text" style="height: 100px;"> <?php the_field("card_p_text_2"); ?> </p> 
								<?php
									$link2 = get_field('link_2');
								?>
								<a class="ah" href="<?php echo $link2['url']; ?>" target="<?php echo $link2['target']; ?>"> <?php echo $link2['title']; ?> </a>
							
							</div>
							
						</div>		
						
					</div>
					
				</div>
				
			</div>
		
	</div>	
	
	
	<div class="row padding-0  bgtwo m-0">
		
		<div class="rec col-12 col-xl-5 mx-auto padding-0 pt-5 pb-5">	
			
			<?php dynamic_sidebar("widget"); ?>	
			
		</div>
		
		<div class=" col-12 col-xl-3  padding-0 pt-5 pb-5">	
			
			<?php echo do_shortcode('[sp_wpcarousel id="420"]'); ?>				
			
		</div>
		
	</div>	
		
</div>		

<?php get_footer(); ?>