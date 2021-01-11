<?php get_header(); ?>

<div class="d-none d-xl-block" style="height: 50px"></div> 
<div id="index" class="content-area col-xl-8 mx-auto pb-5 pt-5 pl-3 pr-3 p-xl-5 ">

    <?php if (have_posts()) : ?>

        <?php while (have_posts()) : the_post(); ?>

            <?php if (has_post_thumbnail()) {  ?> <div> <?php the_post_thumbnail(); ?> </div> <?php } ?>

            <h1 class="mb-5 move-in-right textmain"><?php the_title(); ?></h1>

            <?php the_content() ?>

        <?php endwhile; ?>

    <?php endif; ?>

</div>
<div class="d-none d-xl-block" style="height: 50px"></div> 
<?php get_footer(); ?>