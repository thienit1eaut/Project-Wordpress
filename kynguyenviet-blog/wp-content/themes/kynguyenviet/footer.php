<footer>
    <div class="top-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-5 info-company">
                    <p class="name mb-3"><?php the_option_text_html('name-company', 'options_settings_pages'); ?></p>
                    <p class="describe mb-3"><?php the_option_text_html('desc-company', 'options_settings_pages'); ?></p>
                    <p class="mb-3"><strong>Văn phòng:</strong> <?php the_option_text_html('vp-address-company', 'options_settings_pages'); ?></p>
                    <p class="mb-3"><strong>Nhà máy sx:</strong> <?php the_option_text_html('nm-address-company', 'options_settings_pages'); ?></p>
                    <p class="mb-3"><strong>Hotline:</strong> <?php the_option_text_html('hotline-company', 'options_settings_pages'); ?> - <?php the_option_text_html('hotline-company', 'options_settings_pages'); ?></p>
                    <p class="mb-3"><strong>Email:</strong> <?php the_option_text_html('email-company', 'options_settings_pages'); ?></p>
                    <p class=""><strong>Website:</strong> <?php the_option_text_html('web-company', 'options_settings_pages'); ?></p>
                </div>
                <div class="col-md-4">
                    <p class="title-col-ft mb-3">Google Map</p>
                </div>
                <div class="col-md-3">
                    <p class="title-col-ft mb-3">Facebook</p>
                </div>
            </div>
        </div>
    </div>
    <div class="bot-footer">
        <div class="container">
            <p class="copy-right-web text-center py-3">Bản quyền @2024 Kỷ Nguyên Việt</p>
        </div>
    </div>
</footer>

<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assets/frontend/js/jquery-3.7.1.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assets/frontend/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assets/frontend/js/swiper.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assets/frontend/js/script.js"></script>
<?php wp_footer(); ?>
</body>
</html>