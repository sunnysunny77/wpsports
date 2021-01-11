<?php get_header() ?>

<div class="d-none d-xl-block" style="height: 50px"></div> 
<div id="home" class="content-area  col-xl-8 mx-auto clearfix pl-3 pr-3 pt-5 pb-5  p-xl-5 move-in-down  ">

  <h1 class="textmain mb-5 move-in-right"><?php single_post_title(); ?></h1>

  <?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

      <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <h2> <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a> </h2>

        <?php echo get_the_date(); ?>

        <?php the_time(); ?>

        <?php the_author(); ?>

        <?php if (has_post_thumbnail()) {  ?> <div> <?php the_post_thumbnail(); ?> </div> <?php } ?>

        <p><?php the_field("bp") ?></p>

        <?php the_category(', ') ?>

        <?php the_tags(', ') ?>

        <?php comments_popup_link(); ?>.

        <?php edit_post_link(); ?>
           
      </div>

    <?php endwhile; ?>

  <?php endif; ?>

  <br>

  <?php wp_pagenavi(); ?>
	
  <br>
	
  <br>  
	
  <div class="float-right mb-5" >
    <?php dynamic_sidebar("widget1"); ?>
  </div>

</div>
<div class="d-none d-xl-block" style="height: 50px"></div> 
<?php get_footer() ?>