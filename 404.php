<?php get_header(); ?>

<style type="text/css">
    .image-0 {
        border-radius: 100%;
        width: 200px;
        height: 200px;
    }

    .notfound-4 {
        color: var(--secondary);
        font-weight: 300;
        font-size: 130px;
    }

    .back {
        text-decoration: none;
        color: var(--secondary);
        font-size: 13px;
    }
</style>
<main class="container pt-5">
    <div class="row justify-content-center mt-5">
        <div class="col-3 text-end">
            <span class="notfound-4">{ 4</span>
        </div>
        <div class="col-3 text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/src/img/404.gif" class="image-0" alt="<?php bloginfo('name'); ?> 404 Not Found" />
        </div>
        <div class="col-3 text-start">
            <span class="notfound-4">4 }</span>
        </div>
    </div>

    <div class="text-center mt-5 mb-5">
        <a href="<?php bloginfo('url'); ?>" class="back">Girl : Men Are Always Wrong <3 </a>
    </div>
</main>
<?php get_footer(); ?>