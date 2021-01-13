<?php
/*
Template Name: cont
*/
get_header(); ?>
<div class="d-none d-xl-block" style="height: 50px"></div> 

	<div class="content-area col-xl-8 mx-auto padding-0"  >

		<h1 class="textmain p-5 move-in-right" > <?php the_title(); ?> </h1>
		
		<div class="row m-0 mb-5">
					
					<div class="col-12 col-xl-4  text-center padding-0 ">
						
						<img class="fade-in"  src="<?php the_field("cont_img") ?>" alt="cont_img" width="258" height="250">
						
					</div>
			
					<div class="col-12 col-xl-6 text-center padding-0 m-0 ml-xl-5 mr-xl-5">
						
						<div class="card mb-3 mx-auto bgtwo text-light fade-in-up border-0 pt-4 pb-4   " style="width: 17rem;">
							
							 <div class="card-body">
								 
								<h5 class="card-title textsec"> <?php the_field("cont_title"); ?> </h5>
								<h6 class="card-subtitle mb-2 textopc "> <?php the_field("cont_sub"); ?> </h6>
								<p class="textmain"> <?php the_field("cont_p_text"); ?> </p>
								 <?php
									$link1 = get_field('link_1');
								 	$link2 = get_field('link_2');
								?>
								<a style="margin-right: 10px" href="mailto: <?php echo $link1['url']; ?>" target="<?php echo $link1['target']; ?>">
									<?php echo $link1['title']; ?> 
								</a>
								<a href="tel: <?php echo $link2['url']; ?>" target="<?php echo $link2['target']; ?>">
									<?php echo $link2['title']; ?> 
								</a>
														
							</div>							
											
						</div>		
						
				</div>
			
		</div>
		
			
		<div class="row m-0">
			
			<div class="col-10 mx-auto  padding-0 mb-5 ">
				
				<p class=" textmain text-left ml-2 fade-in">
					
					<?php the_field("cont_add"); ?>
					<br>
				
					Open:
					<br>
					<a href="<?php the_field("cont_map") ?>" target="map" > 
					    <span class="dashicons dashicons-format-image"></span>
					</a>
						
				</p>	
				
				<img class="bodsec rounded flip-up" src="<?php the_field("cont_map") ?>" alt="cont_map" width="100%" >				
				
				<hr class=" mb-5">
				
			</div>
			
		</div>
		
	</div>


<div class="d-none d-xl-block" style="height: 50px"></div> 

<?php get_footer(); ?>
