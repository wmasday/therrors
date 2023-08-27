<?php get_header(); ?>

<main class="container pt-5">
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <div class="search-col">
                <?php get_search_form(); ?>
            </div>
        </div>
    </div>


    <?php
    if (have_posts()) {
    ?>
        <div class="row mt-5 mb-5">
            <?php
            while (have_posts()) {

                the_post();
                get_template_part('templates/content');
            } ?>
        </div>

        <div class="post-paginate paginate-old"><?php next_posts_link('Older posts'); ?></div>
        <div class="post-paginate paginate-new"><?php previous_posts_link('Newer posts'); ?></div>
    <?php } ?>
</main>
<?php get_footer(); ?>