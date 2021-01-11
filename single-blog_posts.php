<?php get_header(); ?>

<div class="d-none d-xl-block" style="height: 50px"></div> 
<div id="single_blog_posts" class="content-area col-xl-8 mx-auto pl-3 pr-3 pb-5 pt-5 p-xl-5  ">

    <?php

    $id = get_the_ID();

    $args = array(
        'post_type' => 'blog_posts',
        'p' => $id,
    );

    $the_query = new WP_Query($args); ?>

    <?php if ($the_query->have_posts()) : ?>

        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
         
        <?php endwhile; ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <div id="prevpost"><?php previous_post_link(); ?></div>

            <div id="nextpost"><?php next_post_link(); ?> </div>

            <h1 class="move-in-right textmain"><?php the_title(); ?></h1>

            <?php echo get_the_date(); ?>

            <?php the_time(); ?>

            <?php the_author(); ?><br />

            <?php if (has_post_thumbnail()) {  ?> <div> <?php the_post_thumbnail(); ?> </div> <?php } ?>

            <p><?php the_field("bp") ?></p>

            <?php the_category(', ') ?>

            <?php the_tags(', ') ?>

            <br>
			
			<?php comments_popup_link(); ?>
			
            <?php edit_post_link(); ?>

            <br>

            <br>

			<div class="move-in-up">
            	<?php comments_template(); ?>	
			</div>	

        </div>

        <?php wp_reset_postdata(); ?>

    <?php else : ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>

</div>
<div class="d-none d-xl-block" style="height: 50px"></div> 
<?php get_footer(); ?>