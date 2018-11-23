<?php 

    //CSS
    function add_theme_scripts() {
        wp_enqueue_style( 'style', get_stylesheet_uri() );
    }
    
    add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

    //Page Banner
    function banner($args) {
        if(!$args['title']){
            $args['title'] = get_the_title();
        }
    ?>
        <div class="container container-header">
            <h1 class="title title-header"><?php echo $args['title'] ?></h1>
        </div>

    <?php
    }
?>