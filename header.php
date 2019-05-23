<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package colton
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&amp;subset=cyrillic"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900&amp;subset=cyrillic"
          rel="stylesheet">
    <!--    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">-->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'colton'); ?></a>
    <header class="main-header">
        <nav class="navbar navbar-expand-lg navbar-light navbar-main">
            <a class="navbar-brand navbar-logo-wrap" href="/">
                <?php
                    $logo_lg = get_field('logo-lg', 'option');
                ?>
                <img src="<?= $logo_lg['url'] ?>" alt="logo" class="logo-pc">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMain"
                    aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarMain">
                <div class="container-fluid">
                    <div class="row ">
                        <div class="col-md-4 our-clinics-wrap">
                            <div class="our-clinics">
                                <div>
                                    <span class="info-txt">Наши клиники в Киеве:</span>
                                </div>
                                <div class="address-clinics">
                                    <div>
                                        <span class="address-txt txt-m-r">
                                            <?= get_field('address_1', 'option') ?>
                                        </span>
                                    </div>
                                    <div class="second-street-frts-block">
                                        <span class="address-txt txt-m-r">
                                            <?= get_field('address_2', 'option') ?>
                                        </span>
                                    </div>
                                    <div>
                                        <span class="address-txt txt-m-r">
                                             <?= get_field('address_studio_3', 'option') ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="second-street-scnd-block">
                                    <span class="address-txt txt-m-r">
                                       <?= get_field('address_2', 'option') ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 pre-entry">
                            <div class="pre-entry-wrap">
                                <div class="pre-entry-txt">
                                    <span class="info-txt">Предварительная запись обязательна:</span>
                                </div>
                                <div class="pre-entry-tel-wrap">
                                    <div class="pre-entry-tel">
                                        <a class="address-txt" href="tel:<?= get_field('phone_1', 'option') ?>">
                                            <?= get_field('phone_1', 'option') ?>
                                        </a>
                                    </div>
                                    <div class="pre-entry-tel">
                                        <a class="address-txt" href="tel:<?= get_field('phone_2', 'option') ?>">
                                            <?= get_field('phone_2', 'option') ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 header-align-items-end">
                            <div class="social-links">
                                <div>
                                    <a href="<?= get_field('facebook', 'option') ?>">
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                </div>
                                <div>
                                    <a href="<?= get_field('instagram', 'option') ?>">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                                <div>
                                    <a href="<?= get_field('youtube', 'option') ?>">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1 header-align-items-center">
                            <div class="lang-block">
                                <div class="lang-item">
                                    EN
                                </div>
                                <div class="lang-divider"></div>
                                <div class="lang-item active">
                                    RU
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="login-block">
                                <div>
                                <span class="username-txt">
                                    Username
                                </span>
                                </div>
                                <div>
                                    <!--                                    <img src="images/header/user.png" alt="user">-->
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/user.png" alt="user">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-border"></div>
                    <div class="row">
                        <div class="header-justify-content-center col-lg-10 ">
                            <div class="navbar-nav"><!--                                </li>-->
                                <?php
                                wp_nav_menu(array(
                                    'menu' => 'main_header',
                                    'menu_id' => 'primary-menu',

                                ));
                                ?>
                               </div>
                        </div>
                        <div class="col-md-2">
                            <div class="items-for-user">
                                <a href="#" class=""><i class="fas fa-search"></i></a>
                                <a href="#"><i class="far fa-heart"></i></a>
                                <a href="<?php echo get_permalink( wc_get_page_id( 'cart' ) ); ?>"><i class="fas fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <header class="tablet-header">
        <nav class="navbar navbar-expand-md navbar-light navbar-tablet">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="wrap-nav-rows">
                    <div class="navbar-nav first-row-nav">
                        <a class="nav-item" href="#">
	                        <?php
	                            $logo_md = get_field('logo_md', 'option');
	                        ?>
                            <img src="<?= $logo_md['url'] ?>" alt="logo">
                        </a>
                        <div>
                            <div class="social-links">
                                <div>
                                    <a href="<?= get_field('facebook', 'option') ?>">
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                </div>
                                <div>
                                    <a href="<?= get_field('instagram', 'option') ?>">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                                <div>
                                    <a href="<?= get_field('youtube', 'option') ?>">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="items-for-user">
                            <a href="#" class=""><i class="fas fa-search"></i></a>
                            <a href="#"><i class="far fa-heart"></i></a>
                            <a href="<?php echo get_permalink( wc_get_page_id( 'cart' ) ); ?>"><i class="fas fa-shopping-cart"></i></a>
                        </div>
                        <div class="lang-block">
                            <div class="lang-item">
                                EN
                            </div>
                            <div class="lang-divider"></div>
                            <div class="lang-item active">
                                RU
                            </div>
                        </div>
                        <div class="login-block">
                            <div>
                                <span class="username-txt">
                                    Username
                                </span>
                            </div>
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/user.png" alt="user">
                            </div>
                        </div>

                    </div>
                    <div class="header-border">

                    </div>
                    <div class="navbar-nav second-row-nav">
	                    <?php
	                    wp_nav_menu(array(
		                    'menu' => 'main_header',
		                    'menu_id' => 'primary-menu',

	                    ));
	                    ?>
                    </div>
                </div>

            </div>
        </nav>
    </header>
    <header class="sm-header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light sm-navbar">
                <a class="navbar-brand p-0 mr-0" href="#">
                    <img src="<?= $logo_md['url'] ?>" alt="logo" class="logo-sm">
	                <?php
	                $logo_sm = get_field('logo_sm', 'option');
	                ?>
                    <img src="<?= $logo_sm['url'] ?>" alt="logo" class="logo-mob">
                </a>
                <div class="items-for-user">
                    <a href="#" class=""><i class="fas fa-search"></i></a>
                    <a href="#"><i class="far fa-heart"></i></a>
                    <a href="<?php echo get_permalink( wc_get_page_id( 'cart' ) ); ?>"><i class="fas fa-shopping-cart"></i></a>
                </div>
                <div class="lang-block">
                    <div class="lang-item">
                        EN
                    </div>
                    <div class="lang-divider"></div>
                    <div class="lang-item active">
                        RU
                    </div>
                </div>
                <div class="login-block">
                    <div>
                        <span class="username-txt">Username</span>
                    </div>
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>assets/images/header/user.png" alt="user">
                    </div>
                </div>
                <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarNavSm"
                        aria-controls="navbarNavSm" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavSm">
                    <div class="navbar-nav">
                        <?php
	                    wp_nav_menu(array(
		                    'menu' => 'main_header',
		                    'menu_id' => 'primary-menu',

	                    ));
	                    ?>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <div id="content" class="site-content">
