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
    <header class="header">
        <div class="header__content">
            <div class="header__logo">
                <a href="<?= get_home_url() ?>" class="logo-link-wrapper">
                    <img src="<?= get_template_directory_uri() . '/frontend/images/logo_white.png'; ?>" alt="logo" class="header__image">
                </a>

                <div class="header__title-wrapper">
                    <h1 class="header__title"><?php bloginfo('name'); ?></h1>
                    <h1 class="header__title"><?php bloginfo('name'); ?></h1>
                </div>
            </div>

            <div class="header__menu js-header-menu">
                <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>

                <div class="menu-item language-options">
                    <span class="selected-language language-option">es</span> | <span class="language-option">de</span>
                </div>

                <div class="social-icons-wrapper">
                    <a href="https://www.facebook.com/culturaperuana.ch/" target="_blank">
                        <i class="fa fas fa-facebook-square social-icon"></i>
                    </a>
                    <a href="#" target="_blank">
                        <i class="fa fas fa-instagram social-icon"></i>
                    </a>
                    <a href="#" target="_blank">
                        <i class="fa fas fa-twitter social-icon"></i>
                    </a>
                </div>
            </div>

            <i class="fa fas fa-bars menu-icon js-menu-icon"></i>
        </div>
    </header>
    