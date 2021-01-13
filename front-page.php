<?php get_header(); ?>

<div id="front" class="container-fluid bgthree mx-auto pl-0 pr-0 " >		
	
	<div class="row m-0">
		
		<div class="col-12 padding-0 mb-5 move-in-down ">
		
			<span class="homet position-absolute textmain mt-5 ml-4 move-in-right" >

				<h1 class="line" > <?php the_title(); ?> </h1>

				<?xml version="1.0" encoding="iso-8859-1"?>
				<!-- Generator: Adobe Illustrator 16.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
				<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
				<svg id="my-svg"  version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					width="100px" height="100px" stroke="#fff"  stroke-width="8" fill="none" viewBox="0 0 487.811 487.81" style="enable-background:new 0 0 487.811 487.81;"
					xml:space="preserve">
				<g>
					<g id="_x33_6_24_">
						<g>
							<path d="M150.463,109.521h150.512c3.955,0,7.16-3.206,7.16-7.161c0-3.955-3.205-7.161-7.16-7.161H150.463
								c-3.955,0-7.161,3.206-7.161,7.161C143.302,106.315,146.508,109.521,150.463,109.521z"/>
							<path d="M15.853,179.537h150.511c3.955,0,7.161-3.206,7.161-7.161s-3.206-7.16-7.161-7.16H15.853
								c-3.955,0-7.161,3.205-7.161,7.16S11.898,179.537,15.853,179.537z"/>
							<path d="M56.258,253.214c0,3.955,3.206,7.162,7.161,7.162H213.93c3.955,0,7.161-3.207,7.161-7.162s-3.206-7.16-7.161-7.16H63.419
								C59.464,246.054,56.258,249.259,56.258,253.214z"/>
							<path d="M142.396,336.44H7.161C3.206,336.44,0,339.645,0,343.6s3.206,7.161,7.161,7.161h135.235c3.955,0,7.161-3.206,7.161-7.161
								S146.351,336.44,142.396,336.44z"/>
							<path d="M385.729,154.418c21.6,0,39.111-17.513,39.111-39.114s-17.512-39.113-39.111-39.113
								c-21.605,0-39.119,17.513-39.119,39.113C346.609,136.905,364.123,154.418,385.729,154.418z"/>
							<path d="M450.066,143.155c-22.459,31.459-52.533,35.102-84.895,15.89c-2.203-1.306-11.977-6.691-14.141-7.977
								c-52.061-30.906-104.061-18.786-138.934,30.05c-14.819,20.771,19.455,40.459,34.108,19.93
								c18.018-25.232,40.929-32.533,65.986-24.541c-12.83,22.27-24.047,44.405-39.875,75.853
								c-15.832,31.448-50.787,56.562-84.374,36.92c-24.235-14.165-46.09,20.651-21.928,34.772
								c45.854,26.799,99.619,10.343,127.066-24.493c0.952,0.509,1.958,0.968,3.062,1.354c22.422,7.812,51.814,28.61,60.77,35.981
								c8.953,7.371,24.336,44.921,33.471,63.788c11.082,22.893,46.871,6.219,35.748-16.771c-10.355-21.406-27.736-64.129-41.293-74.938
								c-10.875-8.669-31.988-24.803-49.895-33.956c12.115-23.466,24.729-46.679,38.008-69.491
								c42.328,12.969,82.561-2.308,111.215-42.446C498.996,142.312,464.73,122.624,450.066,143.155z"/>
						</g></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
				</svg>

			</span>
			 
			<?php echo do_shortcode('[sp_wpcarousel id="217"]'); ?>

		</div>	
		
	</div>
	
	<div class="row m-0">
		
		<p class="col-10 col-lg-8 mx-auto padding-0 textmain text-center mb-5 fade-in-up  "><?php the_field("home_p_text"); ?></p>

		<hr class="col-12 padding-0 wp-block-separator has-text-color has-background has-vivid-red-background-color has-vivid-red-color is-style-dots mb-5" />
		
	</div>
	
	<div class="row m-0" >
		
			<div class="col-12 col-lg-8 mx-auto padding-0 ">
				
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