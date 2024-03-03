<?php
/**
 * @package Spotink Opole
 */
?>

<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link  rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <?php wp_head(); ?>

<body <?php body_class();?>>
    <nav class="nav">
        <div class="nav__top">
            <a href="tel:+48537895760" class="nav__item">
                <i class='bx bx-phone-call'></i>
                +48 537 895 760

            </a>
            <a href="mailto:contact@cieslaszymon.pl" class="nav__item">
                <i class='bx bx-phone-call'></i>
                contact@cieslaszymon.pl

            </a>

        </div>
        <div class="nav__navbar">
            <a href="/" class="nav__logo">
                <img src="https://placeholderlogo.com/img/placeholder-logo-2.png"
                    alt="Logo firmy Spotink, Spotink Opole Druk Ścienny, Druk Ścienny Opole">
            </a>

            <button class="nav__btn">
                <p class="nav__btn-text">menu</p>
                <div class="nav__btn-box">
                    <div class="nav__btn-bars"></div>
                </div>
            </button>
            <div class="nav__desktop">
                <?php wp_nav_menu(
            array(
                'theme_location' => 'spotink_main_menu',
                'menu_class' => 'nav__menu',
                'container' => 'false',
                'menu_id' =>  'menu',
                'add_li_class'  => 'nav__menu-item',
                'add_a_class' => 'nav__menu-link'
            )
        );
    ?>
            </div>
        </div>
        <div class="nav__wrapper">
            <?php wp_nav_menu(
            array(
                'theme_location' => 'spotink_main_menu',
                'menu_class' => 'nav__menu',
                'container' => 'false',
                'menu_id' =>  'menu',
                'add_li_class'  => 'nav__menu-item',
                'add_a_class' => 'nav__menu-link'
            )
        );
    ?>
            <div class="nav__socials">
                <a href="#" class="nav__social"><i class='bx bxl-instagram'></i></a>
                <a href="#" class="nav__social"><i class='bx bxl-facebook'></i></a>
            </div>
        </div>

    </nav>
    <main class="main">
        <?php the_content(); ?>


    </main>