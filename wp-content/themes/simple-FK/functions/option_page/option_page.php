<?php

function simplefk_add_admin_pages() {
    add_menu_page(
        __('Paramètres du thème simple-FK', 'simplefk'),
        __('simple-FK', 'simplefk'),
        'manage_options',
        'simplefk-settings',
        'simplefk_theme_settings',
        'dashicons-admin-settings',
    );
}

function simplefk_theme_settings() {

echo '<h1>'.esc_html( get_admin_page_title() ).'</h1>';

echo '<form action="options.php" method="post" name="simplefk_settings">';

    echo '<div>';

        settings_fields('simplefk_settings_fields');

        do_settings_sections('simplefk_settings_section');

        submit_button();

        echo '</div>';

    echo '</form>';

}

function simplefk_settings_register() {
    register_setting(
        'simplefk_settings_fields',
        'simplefk_settings_fields',
        'simplefk_settings_fields_validate'
    );
    add_settings_section(
        'simplefk_settings_section',
        __('Paramètres', 'simplefk'),
        'simplefk_settings_section_introduction',
        'simplefk_settings_section'
    );
    add_settings_section(
        'simplefk_settings_section_header',
        __('Header', 'simplefk'),
        'simplefk_settings_section_header_introduction',
        'simplefk_settings_section'
    );
    add_settings_section(
        'simplefk_settings_section_blog',
        __('Blog', 'simplefk'),
        'simplefk_settings_section_blog_introduction',
        'simplefk_settings_section'
    );
    add_settings_section(
        'simplefk_settings_section_footer',
        __('Footer', 'simplefk'),
        'simplefk_settings_section_footer_introduction',
        'simplefk_settings_section'
    );
    add_settings_field(
        'simplefk_settings_field_phone_number',
        __('Numéro de téléphone', 'simplefk'),
        'simplefk_settings_field_phone_number_output',
        'simplefk_settings_section',
        'simplefk_settings_section_footer'
    );
    add_settings_field(
        'simplefk_settings_field_email',
        __('E-mail', 'simplefk'),
        'simplefk_settings_field_email_output',
        'simplefk_settings_section',
        'simplefk_settings_section_footer'
    );
    add_settings_field(
        'simplefk_settings_field_banner',
        __('Bannière du site (taille conseillée : 1920x320)', 'simplefk'),
        'simplefk_settings_field_banner_output',
        'simplefk_settings_section',
        'simplefk_settings_section_header',
        array(
            'label_for' => 'simplefk_settings_field_banner',
            'class' => 'loader',
        )
    );
    add_settings_field(
        'simplefk_settings_field_site_color',
        __('Couleur du site','simplefk'),
        'simplefk_settings_field_site_color_output',
        'simplefk_settings_section',
        'simplefk_settings_section'
    );
    add_settings_field(
        'simplefk_settings_field_header_menu_color',
        __('Couleur du menu','simplefk'),
        'simplefk_settings_field_header_menu_color_output',
        'simplefk_settings_section',
        'simplefk_settings_section_header'
    );
    add_settings_field(
        'simplefk_settings_field_header_menu_hover_color',
        __('Couleur du menu au survol','simplefk'),
        'simplefk_settings_field_header_menu_hover_color_output',
        'simplefk_settings_section',
        'simplefk_settings_section_header'
    );
    add_settings_field(
        'simplefk_settings_field_link_color',
        __('Couleur des liens','simplefk'),
        'simplefk_settings_field_link_color_output',
        'simplefk_settings_section',
        'simplefk_settings_section_blog'
    );
    add_settings_field(
        'simplefk_settings_field_link_hover_color',
        __('Couleur des liens au survol','simplefk'),
        'simplefk_settings_field_link_hover_color_output',
        'simplefk_settings_section',
        'simplefk_settings_section_blog'
    );
    add_settings_field(
        'simplefk_settings_field_title_fontfamily',
        __('Police des titres','simplefk'),
        'simplefk_settings_field_title_fontfamily_output',
        'simplefk_settings_section',
        'simplefk_settings_section'
    );
    add_settings_field(
        'simplefk_settings_field_content_fontfamily',
        __('Police des textes','simplefk'),
        'simplefk_settings_field_content_fontfamily_output',
        'simplefk_settings_section',
        'simplefk_settings_section'
    );
    add_settings_field(
        'simplefk_settings_field_menu_fontfamily',
        __('Police du menu','simplefk'),
        'simplefk_settings_field_menu_fontfamily_output',
        'simplefk_settings_section',
        'simplefk_settings_section_header'
    );
    add_settings_field(
        'simplefk_settings_field_footer_menu_color',
        __('Couleur du menu','simplefk'),
        'simplefk_settings_field_footer_menu_color_output',
        'simplefk_settings_section',
        'simplefk_settings_section_footer'
    );
    add_settings_field(
        'simplefk_settings_field_footer_menu_hover_color',
        __('Couleur du menu au survol','simplefk'),
        'simplefk_settings_field_footer_menu_hover_color_output',
        'simplefk_settings_section',
        'simplefk_settings_section_footer'
    );
}

function simplefk_settings_fields_validate($inputs) {
    if(!empty($_POST)) {
        update_option(
            'simplefk_settings_field_phone_number',
            $_POST['simplefk_settings_field_phone_number']
        );
        update_option(
            'simplefk_settings_field_email',
            $_POST['simplefk_settings_field_email']
        );
        update_option(
            'simplefk_settings_field_banner',
            $_POST['simplefk_settings_field_banner']
        );
        update_option(
            'simplefk_settings_field_site_color',
            $_POST['simplefk_settings_field_site_color']
        );
        update_option(
            'simplefk_settings_field_header_menu_color',
            $_POST['simplefk_settings_field_header_menu_color']
        );
        update_option(
            'simplefk_settings_field_header_menu_hover_color',
            $_POST['simplefk_settings_field_header_menu_hover_color']
        );
        update_option(
            'simplefk_settings_field_link_color',
            $_POST['simplefk_settings_field_link_color']
        );
        update_option(
            'simplefk_settings_field_link_hover_color',
            $_POST['simplefk_settings_field_link_hover_color']
         );
        update_option(
            'simplefk_settings_field_title_fontfamily',
            $_POST['simplefk_settings_field_title_fontfamily']
        );
        update_option(
            'simplefk_settings_field_content_fontfamily',
            $_POST['simplefk_settings_field_content_fontfamily']
        );
        update_option(
            'simplefk_settings_field_menu_fontfamily',
            $_POST['simplefk_settings_field_menu_fontfamily']
        );
        update_option(
            'simplefk_settings_field_footer_menu_color',
            $_POST['simplefk_settings_field_footer_menu_color']
        );
        update_option(
            'simplefk_settings_field_footer_menu_hover_color',
            $_POST['simplefk_settings_field_footer_menu_hover_color']
        );
    }
    return $inputs;
}

add_action('admin_menu', 'simplefk_add_admin_pages', 10);
add_action('admin_init', 'simplefk_settings_register');

@include_once 'option_page_output.php';
@include_once 'option_page_scripts.php';