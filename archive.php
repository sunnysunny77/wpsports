<?php get_header() ?>
<div class="d-none d-xl-block" style="height: 50px"></div> 
<div id="archive" class="content-area col-xl-8 mx-auto pl-3 pr-3 pb-5 pt-5 p-xl-5 move-in-down  ">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<?php if (has_post_thumbnail()) {  ?> <div> <?php the_post_thumbnail(); ?> </div> <?php } ?>

			<h1 class="mb-5 textmain"><?php the_title(); ?></h1>

			<p><?php the_field("bp") ?></p>

			<?php echo get_the_date( ); ?> 
	
			<?php the_time(); ?>  
	
			<?php  the_author(); ?><br /> 

			<?php the_excerpt(); ?>
	
	  		<?php comments_popup_link(); ?>
	
			<br>

			<br>
	
		<?php endwhile; ?>

	<?php endif; ?>

	<br>
	
	<?php wp_pagenavi(); ?>		
	
</div>
<div class="d-none d-xl-block" style="height: 50px"></div> 
<?php get_footer() ?>
