<?php get_header(); ?>
<div class="d-none d-xl-block" style="height: 50px"></div> 
<div id="search" class="content-area col-xl-8 mx-auto pt-5 pb-5 pl-3 pr-3 p-xl-5 move-in-down">

    <h1 class="mb-5">Search: &nbsp; <?php the_search_query() ?></h1>

    <?php if (have_posts()) : ?>

        <?php while (have_posts()) : the_post(); ?>

            <?php if (has_post_thumbnail()) {  ?> <div> <?php the_post_thumbnail(); ?> </div> <?php } ?>

            <a href="<?php the_permalink() ?>">
                <h2><?php the_title(); ?></h2>
            </a>

            <br>

            <p><?php the_field("bp") ?></p>

        <?php endwhile; ?>

    <?php else : ?>

        <p><?php echo __('No results found for:'); ?> &nbsp; <?php echo get_search_query(); ?></p>

    <?php endif; ?>

 <?php echo do_shortcode( '[ivory-search id="200" title="Default Search Form"]' ); ?>

</div>
<div class="d-none d-xl-block" style="height: 50px"></div> 
<?php get_footer(); ?>