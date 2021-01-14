<?php
/*
Template Name: about
*/
get_header(); ?>
<div class="d-none d-xl-block" style="height: 50px"></div> 


	<div class="content-area col-xl-8 mx-auto padding-0" >


		<span class="position-absolute textmain ml-3 ml-xl-5 ">
			
			<h1 class="textmain pt-5 pb-2 move-in-right"> <?php the_title(); ?> </h1>
			<?php the_field("about_head_text") ?>
			
		</span>		
		
		<img class="imgabout" src="<?php the_field("about_head") ?>" alt="about head"  width="100%" />
	
		<p class=" bodmain textmain text-center p-2 p-lg-5 mb-5 ml-3 mr-3 ml-xl-5 mr-xl-5  fade-in"  style="margin-top: 7.5%;" >
			<?php the_field("about_p_text") ?>
		</p>

		<hr class="wp-block-separator has-text-color has-background has-vivid-red-background-color has-vivid-red-color is-style-dots mb-5" />

		<figure class="wp-block-pullquote pr-3 pl-3 flip-up ">
			
			<blockquote class="textsec m-0">
				
				<p class="textter"> <?php the_field("quote") ?> </p>
				<cite  > <?php the_field("cite") ?> </cite>
				
			</blockquote>

		</figure>

		<div class="text-center pb-5 pl-3 pr-3 pl-xl-5 pr-xl-5 ">

			<img class="imba d-inline flip-up"  src="<?php the_field("about_img") ?>" alt="about img" width=" 90%" />	

			<span  class="aspan d-block d-lg-inline-block position-relative textmain font-weight-bold pr-5 pl-5 move-in-up" > 

				<br>
				<br>
				<?php the_field("about_heading") ?>
				<br>
				<br>

				<button class="btn-sm bgone  bodmain textmain rounded-0 " type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
						see more
				</button>		

			</span>

			<div class="collapse mt-5" id="collapseExample">
				
				<div class="bodmain textmain text-center p-2 p-lg-5  m-0 fade-in">
					
					<?php the_field("about_more") ?>		  
					
				</div>
				
			</div>

		</div>
		
		 <div class="row d-flex justify-content-center  col-12 textsec text-left  m-0 ">
			
			<div class=" col-12 col-md-5 padding-0  m-3  fade-in ">
				<span class="dashicons dashicons-star-filled  textmain m-2 "></span>		
				<p class="aa rounded bgtwo text-center p-4" style="height: 82.5%;" ><?php the_field("about_star") ?>		  
					 </p>
			</div>
			 
			<div class="col-12 col-md-5 padding-0   m-3 fade-in ">
				<span class="dashicons dashicons-admin-tools  textmain m-2"></span>
				<p class="aa rounded bgtwo text-center  p-4"  style="height: 82.5%;"  > <?php the_field("about_tool") ?>		  
					 </p>
			</div>
		
		</div>
		
		<h2 class="textmain pt-5 pl-5 pb-3 move-in-right "> <?php the_field("spon") ?> </h2>

		<div class="rad col-12 mx-auto bgfour padding-0 text-center pt-5 pb-5" >

			<?php
				$link1 = get_field('link_1');
				$link2 = get_field('link_2');
				$link3 = get_field('link_3');
				$link4 = get_field('link_4');
				$link5 = get_field('link_5');
				$link6 = get_field('link_6');
			?>
			<a href="<?php echo $link1['url']; ?>" target="<?php echo $link1['target']; ?>"class="per badge  bgone border-0  ">
				<?php echo $link1['title']; ?> 
				<img style="margin-left: 20px" src="<?php the_field("spon_img_1") ?>" alt="spon_img_1" width="20px" height="20px" />
			</a>
			<a href="<?php echo $link2['url']; ?>" target="<?php echo $link2['target']; ?>"class="per badge  bgone border-0  ">
				<?php echo $link2['title']; ?> 
				<img style="margin-left: 20px" src="<?php the_field("spon_img_2") ?>" alt="spon_img_2" width="20px" height="20px" />
			</a>
			<a href="<?php echo $link3['url']; ?>" target="<?php echo $link3['target']; ?>"class="per badge   bgone border-0  ">
				<?php echo $link3['title']; ?> 
				<img style="margin-left: 20px" src="<?php the_field("spon_img_3") ?>" alt="spon_img_3" width="20px" height="20px" />
			</a>
			<a href="<?php echo $link4['url']; ?>" target="<?php echo $link4['target']; ?>"class="per badge   bgone border-0  ">
				<?php echo $link4['title']; ?> 
				<img style="margin-left: 20px" src="<?php the_field("spon_img_4") ?>" alt="spon_img_4" width="20px" height="20px" />
			</a>
			<a href="<?php echo $link5['url']; ?>" target="<?php echo $link5['target']; ?>"class="per badge   bgone border-0  ">
				<?php echo $link5['title']; ?> 
				<img style="margin-left: 20px" src="<?php the_field("spon_img_5") ?>" alt="spon_img_5" width="20px" height="20px" />
			</a>
			<a href="<?php echo $link6['url']; ?>" target="<?php echo $link6['target']; ?>"class="per  badge   bgone border-0 ">
				<?php echo $link6['title']; ?> 
				<img style="margin-left: 20px"  src="<?php the_field("spon_img_6") ?>" alt="spon_img_6" width="20px" height="20px" />	
			</a>

		</div>
			
	</div>

<div class="d-none d-xl-block" style="height: 50px"></div> 
<?php get_footer(); ?>