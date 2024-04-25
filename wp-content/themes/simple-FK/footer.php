        <footer class="footer site__color">
            <div class="footer__content">
                <?php wp_nav_menu( array(
                                'theme_location' => 'footer',
                                'container' => 'ul',
                                'menu_class' => 'footer__menu',
                            )
                        ); ?>

                <div>
                    <?php
                        simplefk_get_option('simplefk_settings_field_email');
                     ?>
                    <?php
                        simplefk_get_option('simplefk_settings_field_phone_number');
                    ?>
                </div>
            </div>
        </footer>

        <?php wp_footer(); ?>
    </body>
</html>