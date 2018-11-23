<?php get_header() ?>

<main class="main">
        <?php 
            while(have_posts()) {
                the_post(); 
                banner(array(
                    'title' => get_field('title'),
                ));
            }
        ?>

        <div class="container container-content">
            <?php the_content(); ?>
        </div>
</main>

<?php get_footer() ?>