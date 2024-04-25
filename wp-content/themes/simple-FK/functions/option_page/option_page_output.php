<?php

function simplefk_settings_section_introduction() {
    echo __('Paramètrez les différentes options de votre thème SimpleFK.', 'simplefk');
}

function simplefk_settings_section_header_introduction() {
    echo __('Header', 'simplefk');
}

function simplefk_settings_section_blog_introduction() {
    echo __('Blog', 'simplefk');
}

function simplefk_settings_section_footer_introduction() {
    echo __('Footer', 'simplefk');
}


function simplefk_settings_field_phone_number_output() {
    $value = get_option('simplefk_settings_field_phone_number');

    echo '<input name="simplefk_settings_field_phone_number" type="text" value="'.$value.'" />';
}

function simplefk_settings_field_email_output() {
    $value = get_option('simplefk_settings_field_email');

    echo '<input name="simplefk_settings_field_email" type="text" value="'.$value.'" />';
}

function simplefk_settings_field_banner_output() {
    $value = get_option( 'simplefk_settings_field_banner' );

    if($value):
        ?>
        <a href="#" class="custom-upload-button button" style="width: 230px">
            <img src="<?php echo $value; ?>" alt="banner" style="width: 100%" />
        </a>
        <a href="#" class="custom-upload-remove">Remove image</a>
        <input type="hidden" name="simplefk_settings_field_banner" value="<?php echo $value ?>">
        <?php
    else:
        ?>
        <a href="#" class="custom-upload-button button" style="width: 230px; text-align: center;">Upload image</a>
        <a href="#" class="custom-upload-remove" style="display:none;">Remove image</a>
        <input type="hidden" name="simplefk_settings_field_banner" value="">
        <?php
    endif;
}

function simplefk_settings_field_site_color_output() {
    $value = get_option('simplefk_settings_field_site_color');

    echo '<input name="simplefk_settings_field_site_color" type="color" value="'.$value.'" />';
}

function simplefk_settings_field_header_menu_color_output() {
    $value = get_option('simplefk_settings_field_header_menu_color');

    echo '<input name="simplefk_settings_field_header_menu_color" type="color" value="'.$value.'" />';
}

function simplefk_settings_field_header_menu_hover_color_output() {
    $value = get_option('simplefk_settings_field_header_menu_hover_color');

    echo '<input name="simplefk_settings_field_header_menu_hover_color" type="color" value="'.$value.'" />';
}

function simplefk_settings_field_footer_menu_color_output() {
    $value = get_option('simplefk_settings_field_footer_menu_color');

    echo '<input name="simplefk_settings_field_footer_menu_color" type="color" value="'.$value.'" />';
}

function simplefk_settings_field_footer_menu_hover_color_output() {
    $value = get_option('simplefk_settings_field_footer_menu_hover_color');

    echo '<input name="simplefk_settings_field_footer_menu_hover_color" type="color" value="'.$value.'" />';
}

function simplefk_settings_field_link_color_output() {
    $value = get_option('simplefk_settings_field_link_color');

    echo '<input name="simplefk_settings_field_link_color" type="color" value="'.$value.'" />';
}

function simplefk_settings_field_link_hover_color_output() {
    $value = get_option('simplefk_settings_field_link_hover_color');

    echo '<input name="simplefk_settings_field_link_hover_color" type="color" value="'.$value.'" />';
}

function simplefk_fontfamily_select($option) {
    $value = get_option($option);

    echo '<select name="'.$option.'" id="pet-select">';
    if ($value):
        echo '<option value="'.$value.'">'.$value.'</option>';
    else:
        echo '<option value="">--Please choose an option--</option>';
    endif;
    ?>
        <option value="Open Sans">Open Sans</option>
        <option value="Roboto">Roboto</option>
        <option value="Bebas Neue">Bebas Neue</option>
        <option value="Manrope">Manrope</option>
        <option value="Playfair Display">Playfair Display</option>
        <option value="Nunito Sans">Nunito Sans</option>
        <option value="Poppins">Poppins</option>
        <option value="Lato">Lato</option>
        <option value="Montserrat">Montserrat</option>
        <option value="Red Hat Display">Red Hat Display</option>
    </select>
    <?php
}

function simplefk_settings_field_title_fontfamily_output() {
    simplefk_fontfamily_select('simplefk_settings_field_title_fontfamily');
}

function simplefk_settings_field_content_fontfamily_output() {
    simplefk_fontfamily_select('simplefk_settings_field_content_fontfamily');
}

function simplefk_settings_field_menu_fontfamily_output() {
    simplefk_fontfamily_select('simplefk_settings_field_menu_fontfamily');
}