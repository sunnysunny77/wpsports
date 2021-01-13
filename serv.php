<?php

/*
Template Name: serv
*/
 get_header(); ?>

<div id="serv" class="container-fluid content-area mx-auto pl-0 pr-0 pb-5 " >		
	
	<div class="top" style="background-image: url(	<?php the_field("img_s_head") ?> );"></div>
	
	<h1 class="textmain p-5 move-in-right" > <?php the_title(); ?> </h1>	
	
	<section class="move-in-up">
		
  	 	<div class="stick">
		
		 	<img   src="<?php the_field("img_s_1") ?>" alt="img s 1"  />
							
   		</div>

		<div class="content textmain">
			
			<span class="dashicons dashicons-format-aside ml-3 mr-2 mt-5 mb-2 "></span>				
			<p> 
				<?php the_field("text_1"); ?> 
			</p>

		</div>

  </section>
	
	<section class="move-in-up">
		
  	 	<div class="stick">
		
		 	<img   src="<?php the_field("img_s_2") ?>" alt="img s 2"  />
							
    	</div>

		<div class="content textmain">

			
			<span class="dashicons dashicons-format-aside ml-3 mr-2 mt-5 mb-2 "></span>
			<p>
				<?php the_field("text_2"); ?> 
			</p>

		</div>

  </section>

</div>		

<?php get_footer(); ?>
