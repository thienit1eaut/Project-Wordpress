<footer>
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4 pt-2">
                    <a href="<?php echo get_home_url(); ?>" class="logo-footer" title="<?php echo get_bloginfo( 'name' ); ?>">
                        <?php the_option_image_html('logo-header','','options_settings_pages'); ?>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 pt-2">
                    <div class="title-footer">Linh nhanh</div>
                    <div class="menu-list-link">
                        <ul>
                            <li><a href="#">Giới Thiệu & Liên Hệ</a></li>
                            <li><a href="#">Chính Sách & Điều Khoản</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 pt-2">
                    <div class="title-footer">Liên kết mạng xã hội</div>
                    <div class="menu-list-social">
                        <ul class="menu-social">
                            <li><a href="#" class="item-social smooth" title="Email"><i class="fa fa-envelope-o smooth" aria-hidden="true"></i> Email</a></li>
                            <li><a href="#" class="item-social smooth" title="Facebook"><i class="fa fa-facebook smooth" aria-hidden="true"></i> Facebook</a></li>
                            <li><a href="#" class="item-social smooth" title="Twitter"><i class="fa fa-twitter smooth" aria-hidden="true"></i> Twitter</a></li>
                            <li><a href="#" class="item-social smooth" title="Youtube"><i class="fa fa-youtube-play smooth" aria-hidden="true"></i> Youtube</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <p class="text-center all-copyright">© All Right Reserved</p>
    </div>
</footer>

<script defer src="<?php echo get_template_directory_uri() ?>/assets/frontend/js/jquery-3.7.1.min.js"></script>
<script defer src="<?php echo get_template_directory_uri() ?>/assets/frontend/js/bootstrap.min.js"></script>
<script defer src="<?php echo get_template_directory_uri() ?>/assets/frontend/js/swiper.min.js"></script>
<script defer src="<?php echo get_template_directory_uri() ?>/assets/frontend/js/script.js"></script>
<?php wp_footer(); ?>
</body>
</html>