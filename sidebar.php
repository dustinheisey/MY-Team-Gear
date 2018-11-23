<div class="container container-branding">
    <label for="toggle" class="toggle">&#9776;</label>
    <a class="link-branding-vertical" href="<?php echo site_url('/'); ?>"><img class="img img-branding-vertical element-nav" src="<?php echo get_theme_file_uri('/assets/images/logo-vertical.png'); ?>" alt="MY Team Gear Logo"></a>
    <a class="link-branding-horizontal" href="<?php echo site_url('/'); ?>"><img class="img img-branding-horizontal element-nav" src="<?php echo get_theme_file_uri('/assets/images/logo-horizontal.png'); ?>" alt="MY Team Gear Logo"></a>
</div>
<input type="checkbox" id="toggle" />
<nav class="container container-nav">
    <ul>
        <li <?php if(is_page('in-the-stands')) echo "class='btn-nav-active btn btn-nav element-nav'" ?> class="btn btn-nav element-nav" onclick="window.location.href='<?php echo site_url("/store/In-The-Stands-c29400653") ?>'"><p class="link link-dark">In The Stands</p></li>
        <li <?php if(is_page('team-gear')) echo "class='btn-nav-active btn btn-nav element-nav'" ?> class="btn btn-nav element-nav" onclick="window.location.href='<?php echo site_url("/store/Team-Gear-c29400654") ?>'"><p class="link link-dark">Team Gear</p></li>
        <li <?php if(is_page('award-center')) echo "class='btn-nav-active btn btn-nav element-nav'" ?> class="btn btn-nav element-nav" onclick="window.location.href='<?php echo site_url("/store/The-Award-Center-c29400655") ?>'"><p class="link link-dark">Award Center</p></li>
        <li <?php if(is_page('pass-the-ball')) echo "class='btn-nav-active btn btn-nav element-nav'" ?> class="btn btn-nav element-nav" onclick="window.location.href='<?php echo site_url("/pass-the-ball") ?>'"><p class="link link-dark">Pass The Ball</p></li>
    </ul>
</nav>