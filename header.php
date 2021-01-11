<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <!-- BODY START -->
    <header>
        <i class="fas fa fa-bars"></i>
        <div class="hero">
            <h1 class="hero__title"><a href="<?php echo get_home_url() ?>"><?php bloginfo('name'); ?></a></h1>
        </div>
        <nav class="nav">
            <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
        </nav>
    </header>
