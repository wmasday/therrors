<?php get_header(); ?>

<main class="container pt-5">
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
    ?>
            <div class="row mt-2 mb-5">
                <div class="col-sm-7 text-center mb-5">
                    <h1 class="mb-2 post-title-single"><?php the_title(); ?></h1>
                    <span class="post-time-single"><?php the_time('F j, Y'); ?></span>
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="w-100 mt-3 rounded-3" />

                    <div class="row mt-3">
                        <div class="col-8 post-category text-start">
                            <?php the_category(' '); ?>
                        </div>
                        <div class="col-4 text-end">
                            <div class="post-author-single">By <?php the_author(); ?></div>
                        </div>
                    </div>

                    <div class="post-content-single mt-3">
                        <?php the_content(); ?>
                    </div>
                </div>

                <div class="col-sm-3 offset-sm-2">
                    <?php
                    $query = new WP_Query('posts_per_page=10');
                    if ($query->have_posts()) {
                        while ($query->have_posts()) {
                            $query->the_post();
                            get_template_part('templates/side-single');
                        }
                    }
                    ?>
                </div>
            </div>
    <?php
        }
    }
    ?>
</main>
<?php get_footer(); ?>