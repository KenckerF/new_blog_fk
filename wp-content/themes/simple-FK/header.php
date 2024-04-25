<?php @include 'functions/get_option.php'; ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <?php wp_head(); ?>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Manrope:wght@200..800&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

    <?php
    simplefk_title_fontfamily('simplefk_settings_field_title_fontfamily');
    simplefk_content_fontfamily('simplefk_settings_field_content_fontfamily');
    simplefk_menu_fontfamily('simplefk_settings_field_menu_fontfamily');
    simplefk_site_color('simplefk_settings_field_site_color');
    simplefk_header_menu_color(
            'simplefk_settings_field_header_menu_color',
            'simplefk_settings_field_header_menu_hover_color'
    );
    simplefk_footer_menu_color(
        'simplefk_settings_field_footer_menu_color',
        'simplefk_settings_field_footer_menu_hover_color'
    );
    simplefk_link_color(
            'simplefk_settings_field_link_color',
            'simplefk_settings_field_link_hover_color'
    );
    ?>
</head>

<body <?php body_class(); ?>>
    <header class="header">
        <?php simplefk_banner('simplefk_settings_field_banner'); ?>

        <?php wp_nav_menu( array(
                'theme_location' => 'main',
                'container' => 'ul',
                'menu_class' => 'header__menu',
            )
        ); ?>
        <div class="blurred-line site__color"></div>
    </header>

    <?php wp_body_open(); ?>