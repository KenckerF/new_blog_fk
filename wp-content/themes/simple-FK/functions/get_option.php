<?php

function simplefk_get_option($value) {
    $option = get_option($value);
    if (!empty($option)) {
        echo $option;
    }
}

function simplefk_banner ($value) {
    $option = get_option($value);
    if (!empty($option)) {
        echo '<a href="'.home_url( '/' ).'">';
            echo '<img class="header__banner" src="'.$option.'" alt="banner">';
        echo '</a>';
    }
}

function simplefk_site_color($value) {
    $option = get_option($value);
    echo '<style id="site__color"> .site__color { background-color: '.$option.' }</style>';
}

function simplefk_header_menu_color($value, $hover_value) {
    $option = get_option($value);
    $option_hover = get_option($hover_value);
    echo(
        '<style id="header__menu-color">
            .header__menu .current_page_item { border-bottom: solid 3px ' . $option_hover . ' } 
            .header__menu .page_item a { color: ' . $option . ' }
            .header__menu .page_item a:visited { color: ' . $option . ' }
            .header__menu .page_item a:active { color: ' . $option_hover . ' }
            .header__menu .page_item a:hover { border-bottom: solid 3px ' . $option_hover . '; color: ' . $option . '; }
        </style>'
    );
}

function simplefk_footer_menu_color($value, $hover_value) {
    $option = get_option($value);
    $option_hover = get_option($hover_value);
    echo(
        '<style id="footer__menu-color">
            .footer__menu .current_page_item { border-bottom: solid 3px ' . $option_hover . ' } 
            .footer__menu .page_item a { color: ' . $option . ' }
            .footer__menu .page_item a:visited { color: ' . $option . ' }
            .footer__menu .page_item a:active { color: ' . $option_hover . ' }
            .footer__menu .page_item a:hover { border-bottom: solid 3px ' . $option_hover . '; color: ' . $option . '; }
        </style>'
    );
}

function simplefk_link_color($value, $hover_value) {
    $option = get_option($value);
    $option_hover = get_option($hover_value);
    echo (
        '<style id="post__link"> 
            .post__link { color: '.$option.' }
            .post__link:visited { color: '.$option.' }
            .post__link:active { color: '.$option_hover.' }
            .post__link:hover { color: '.$option_hover.' }
        </style>'
    );
}

function simplefk_fontfamily($value) :string {
    $fontFamily = get_option($value);
    $result = '{ }';

    if ($fontFamily == 'Roboto') {
        $result = '{ font-family: "Roboto", sans-serif }';
    } elseif ($fontFamily == 'Open Sans') {
        $result = '{ font-family: "Open Sans", sans-serif }';
    } elseif ($fontFamily == 'Bebas Neue') {
        $result = '{ font-family: "Bebas Neue", sans-serif; }';
    } elseif ($fontFamily == 'Manrope') {
        $result = '{ font-family: "Manrope", sans-serif; }';
    } elseif ($fontFamily == 'Playfair Display') {
        $result = '{ font-family: "Playfair Display", serif; }';
    } elseif ($fontFamily == 'Nunito Sans') {
        $result = '{ font-family: "Nunito Sans", sans-serif; }';
    } elseif ($fontFamily == 'Poppins') {
        $result = '{ font-family: "Poppins", sans-serif; }';
    } elseif ($fontFamily == 'Lato') {
        $result = '{ font-family: "Lato", sans-serif; }';
    } elseif ($fontFamily == 'Montserrat') {
        $result = '{ font-family: "Montserrat", sans-serif; }';
    } elseif ($fontFamily == 'Red Hat Display') {
        $result = '{ font-family: "Red Hat Display", sans-serif; }';
        }

    return $result;
}

function simplefk_title_fontfamily($value) {
    $fontFamily = simplefk_fontfamily($value);

    echo '<style id="title_font-family">h1 '.$fontFamily.'</style>';
}

function simplefk_content_fontfamily($value) {
    $fontFamily = simplefk_fontfamily($value);

    echo '<style id="content_font-family">body '.$fontFamily.'</style>';

}

function simplefk_menu_fontfamily($value) {
    $fontFamily = simplefk_fontfamily($value);

    echo '<style id="menu_font-family">.header__menu a '.$fontFamily.'</style>';

}