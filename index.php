<?php get_header(); ?>

<main class="main main-home">

    <!-- Landing -->
    <div class="section section-landing" style="background-image: radial-gradient(circle, rgba(2,0,36,0.5) 0%, rgba(0,0,0,0.3) 54%, rgba(255,255,255,0.5) 100%), url('<?php echo get_theme_file_uri('/assets/images/landing.jpg')?>')">
        <h1 class="title title-landing">All Sports. Always.</h1>
        <div class="btn btn-light btn-landing"><a href="#categories" class="link link-light link-landing link-btn-light">Find Your Sport</a></div>
        <div class="btn btn-light btn-landing-mobile"><a href="#categories-mobile" class="link link-light link-landing link-btn-light">Find Your Sport</a></div>
    </div>

    <!-- Donate -->
    <div class="section cta cta-donate">
        <h2 class="title title-donate">Join Us and Pass The Ball</h2>
        <img src="<?php echo get_theme_file_uri('/assets/images/pass-the-ball.png')?>" class="img-donate">
        <div class="btn btn-dark"><a href="<?php echo site_url('/pass-the-ball') ?>" class="link link-dark link-btn link-btn-dark">Learn More</a></div>
    </div>

    <!-- Discount Products -->


    <!-- Sublimation -->
    <div class="section section-sublimation">
        <div class="container container-sublimation"></div>
        <div class="container container-sublimation-text">
            <h2 class="title title-sublimation element-sublimation">Custom Sublimation</h2>
            <p class="text text-sublimation element-sublimation">CUSTOMIZE YOUR TEAM WITH THIS POPULAR PRINTING METHOD. SUBLIMATION IS AN ALL OVER PRINT DESIGN THAT IS SURE TO MAKE AN UNIQUE IMPRESSION ON ANYONE WATCHING FROM THE STANDS.</p>
            <div class="btn btn-dark btn-sublimation element-sublimation"><a href="<?php echo site_url('/sublimation') ?>" class="link link-dark link-btn link-sublimation">Learn More</a></div>
        </div>
        <img src="<?php echo get_theme_file_uri('assets/images/sublimation.jpg'); ?>" alt="Custom Sublimation" class="img img-sublimation">
    </div>

    <!-- Categories -->
    <div class="section section-categories-mobile" id="categories-mobile">
        <h2 class="title title-categories">Shop By Sport</h2>
        <?php echo do_shortcode("[wp1s id='57']"); ?>
    </div>

    <div class="section section-categories" id="categories">
        <h2 class="title title-categories">Shop By Sport</h2>
        <div class="container container-categories">
            <a href="<?php echo site_url('/store/Baseball-c29400677') ?>">
                <div class="container container-category">
                    <img src="<?php echo get_theme_file_uri('assets/images/baseball.jpg'); ?>" alt="Baseball" class="img img-category">
                    <h3 class="title title-category">Baseball</h3>
                </div>
            </a>
            <a href="<?php echo site_url('/store/Basketball-c29400678') ?>">
                <div class="container container-category">
                    <img src="<?php echo get_theme_file_uri('assets/images/basketball.jpg'); ?>" alt="Basketball" class="img img-category">
                    <h3 class="title title-category">Basketball</h3>
                </div>
            </a>
            <a href="<?php echo site_url('/store/Bowling-c29400701') ?>">
                <div class="container container-category">
                    <img src="<?php echo get_theme_file_uri('assets/images/bowling.jpg'); ?>" alt="Bowling" class="img img-category">
                    <h3 class="title title-category">Bowling</h3>
                </div>
            </a>
            <a href="<?php echo site_url('/store/Cheerleading-c29400700') ?>">
                <div class="container container-category">
                    <img src="<?php echo get_theme_file_uri('assets/images/cheer.jpg'); ?>" alt="Cheerleading" class="img img-category">
                    <h3 class="title title-category">Cheerleading</h3>
                </div>
            </a>
            <a href="<?php echo site_url('/store/Cycling-c29400699') ?>">
                <div class="container container-category">
                    <img src="<?php echo get_theme_file_uri('assets/images/cycling.jpg'); ?>" alt="Cycling" class="img img-category">
                    <h3 class="title title-category">Cycling</h3>
                </div>
            </a>
            <a href="<?php echo site_url('/store/Dance-Drill-c29400698') ?>">
                <div class="container container-category">
                    <img src="<?php echo get_theme_file_uri('assets/images/dancing.jpg'); ?>" alt="Dancing" class="img img-category">
                    <h3 class="title title-category">Dance/Drill</h3>
                </div>
            </a>
            <a href="<?php echo site_url('/store/E-Sports-c29400697') ?>">
                <div class="container container-category">
                    <img src="<?php echo get_theme_file_uri('assets/images/esports.jpg'); ?>" alt="ESports" class="img img-category">
                    <h3 class="title title-category">ESports</h3>
                </div>
            </a>
            <a href="<?php echo site_url('/store/Fighting-Wrestling-c29400696') ?>">
                <div class="container container-category">
                    <img src="<?php echo get_theme_file_uri('assets/images/boxing.jpg'); ?>" alt="Boxing" class="img img-category">
                    <h3 class="title title-category">Fighting/Wrestling</h3>
                </div>
            </a>
            <a href="<?php echo site_url('/store/Football-c29400695') ?>">
                <div class="container container-category">
                    <img src="<?php echo get_theme_file_uri('assets/images/football.jpg'); ?>" alt="Football" class="img img-category">
                    <h3 class="title title-category">Football</h3>
                </div>
            </a>
            <a href="<?php echo site_url('/store/Golf-c29400693') ?>">
                <div class="container container-category">
                    <img src="<?php echo get_theme_file_uri('assets/images/golf.jpg'); ?>" alt="Golf" class="img img-category">
                    <h3 class="title title-category">Golf</h3>
                </div>
            </a>
            <a href="<?php echo site_url('/store/Gymnastics-c29400691') ?>">
                <div class="container container-category">
                    <img src="<?php echo get_theme_file_uri('assets/images/gymnastics.jpg'); ?>" alt="Gymnastics" class="img img-category">
                    <h3 class="title title-category">Gymnastics</h3>
                </div>
            </a>
            <a href="<?php echo site_url('/store/Hockey-c29400690') ?>">
                <div class="container container-category">
                    <img src="<?php echo get_theme_file_uri('assets/images/hockey.jpg'); ?>" alt="Hockey" class="img img-category">
                    <h3 class="title title-category">Hockey</h3>
                </div>
            </a>
            <a href="<?php echo site_url('/store/Lacrosse-c29400689') ?>">
                <div class="container container-category">
                    <img src="<?php echo get_theme_file_uri('assets/images/lacrosse.jpg'); ?>" alt="Lacrosse" class="img img-category">
                    <h3 class="title title-category">Lacrosse</h3>
                </div>
            </a>
            <a href="<?php echo site_url('/store/Marching-Arts-c29400688') ?>">
                <div class="container container-category">
                    <img src="<?php echo get_theme_file_uri('assets/images/band.jpg'); ?>" alt="Marching Band" class="img img-category">
                    <h3 class="title title-category">Marching Band</h3>
                </div>
            </a>
            <a href="<?php echo site_url('/store/Motor-Racing-c29400687') ?>">
                <div class="container container-category">
                    <img src="<?php echo get_theme_file_uri('assets/images/motor.jpg'); ?>" alt="Motor Racing" class="img img-category">
                    <h3 class="title title-category">Motor Racing</h3>
                </div>
            </a>
            <a href="<?php echo site_url('/store/Outdoor-Sports-c29400686') ?>">
                <div class="container container-category">
                    <img src="<?php echo get_theme_file_uri('assets/images/climbing.jpg'); ?>" alt="Outdoor Sports" class="img img-category">
                    <h3 class="title title-category">Outdoor Sports</h3>
                </div>
            </a>
            <a href="<?php echo site_url('/store/Soccer-c29400685') ?>">
                <div class="container container-category">
                    <img src="<?php echo get_theme_file_uri('assets/images/soccer.jpg'); ?>" alt="Soccer" class="img img-category">
                    <h3 class="title title-category">Soccer</h3>
                </div>
            </a>
            <a href="<?php echo site_url('/store/Softball-c29400684') ?>">
                <div class="container container-category">
                    <img src="<?php echo get_theme_file_uri('assets/images/softball.jpg'); ?>" alt="Softball" class="img img-category">
                    <h3 class="title title-category">Softball</h3>
                </div>
            </a>
            <a href="<?php echo site_url('/store/Swimming-c29400683') ?>">
                <div class="container container-category">
                    <img src="<?php echo get_theme_file_uri('assets/images/swimming.jpg'); ?>" alt="Swimming" class="img img-category">
                    <h3 class="title title-category">Swimming</h3>
                </div>
            </a>
            <a href="<?php echo site_url('/store/Tennis-c29400682') ?>">
                <div class="container container-category">
                    <img src="<?php echo get_theme_file_uri('assets/images/tennis.jpg'); ?>" alt="Tennis" class="img img-category">
                    <h3 class="title title-category">Tennis</h3>
                </div>
            </a>
            <a href="<?php echo site_url('store/Track-&-Field-c29400681') ?>">
                <div class="container container-category">
                    <img src="<?php echo get_theme_file_uri('assets/images/track.jpg'); ?>" alt="Track and Field" class="img img-category">
                    <h3 class="title title-category">Track and Field</h3>
                </div>
            </a>
            <a href="<?php echo site_url('/store/Volleyball-c29400680') ?>">
                <div class="container container-category">
                    <img src="<?php echo get_theme_file_uri('assets/images/volleyball.jpg'); ?>" alt="Volleyball" class="img img-category">
                    <h3 class="title title-category">Volleyball</h3>
                </div>
            </a>
            <a href="<?php echo site_url('/store/Weightlifting-c29400679') ?>">
                <div class="container container-category">
                    <img src="<?php echo get_theme_file_uri('assets/images/weightlifting.jpg'); ?>" alt="Weightlifting" class="img img-category">
                    <h3 class="title title-category">Weightlifting</h3>
                </div>
            </a>
            <div class="container container-category container-empty-main">
                <div class="container container-empty">
                <svg height="24vh" viewBox="0 0 16 16" width="24vh" stroke="none" stroke-width="1"><g fill="#000000" id="Group" transform="translate(-48.000000, -432.000000)"><path d="M54.8796844,443.0591 L54.8796844,445 L57.2307692,445 L57.2307692,443.0591 Z M56,448 C51.5817218,448 48,444.418278 48,440 C48,435.581722 51.5817218,432 56,432 C60.4182782,432 64,435.581722 64,440 C64,444.418278 60.4182782,448 56,448 Z M53.5700197,435.51041 C52.5864514,436.043208 52.0631167,436.947609 52,438.22364 L54.2800789,438.22364 C54.2800789,437.852024 54.4076253,437.493845 54.6627219,437.149093 C54.9178185,436.804341 55.3504243,436.631968 55.9605523,436.631968 C56.5811997,436.631968 57.0085458,436.771881 57.2426036,437.051713 C57.4766613,437.331544 57.5936884,437.641592 57.5936884,437.981867 C57.5936884,438.277369 57.4884955,438.548241 57.2781065,438.794493 L56.8205128,439.190732 L56.2445759,439.573539 C55.6765258,439.949633 55.3241295,440.282067 55.1873767,440.570853 C55.0506239,440.859639 54.9664696,441.382356 54.9349112,442.139019 L57.0650888,442.139019 C57.0703485,441.780835 57.1045362,441.516679 57.1676529,441.346541 C57.2675876,441.077903 57.4700839,440.842849 57.7751479,440.64137 L58.3353057,440.271995 C58.9033559,439.895901 59.28731,439.586972 59.4871795,439.345198 C59.8290615,438.946718 60,438.456461 60,437.874412 C60,436.925225 59.6068415,436.208867 58.8205128,435.725319 C58.0341841,435.241771 57.0466858,435 55.8579882,435 C54.9533157,435 54.1906671,435.170135 53.5700197,435.51041 Z M53.5700197,435.51041" id="Oval 318"/></g></g></svg>
                </div>
                <h3 class="title title-category">Your Sport Here</h3>
            </div>
            <div class="container container-add">
                <div class="container-add-text">
                    <h3 class="title title-category title-add"><span class="element-add-span">Don't see your sport?</span> Tell us about it so we can add it for you!</h3>
                </div>
                <div class="btn btn-dark btn-add"><a href="<?php echo site_url('/contact') ?>" class="link link-dark link-btn">Contact Us</a></div>
            </div>
        </div>
    </div>

    <!-- Top Products -->


    <!-- Ship -->
    <div class="section cta cta-ship">
        <h2 class="title title-ship">Where's My Items?</h2>
        <a href="<?php echo site_url('/track-order') ?>" class="link-track">
            <img src="<?php echo get_theme_file_uri('/assets/images/tracking.png')?>" class="img-track">
        </a>
    </div>
</main>
<?php get_footer(); ?>
