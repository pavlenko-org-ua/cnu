<?php
/**
 * Footer Area Before
 */
if (!function_exists('education_web_footer_before')) {
    function education_web_footer_before()
    { ?>
        <footer id="footer" class="footer dark site-footer" itemscope="itemscope" itemtype="http://schema.org/WPFooter">
        <?php
    }
}
add_action('education_web_footer_before', 'education_web_footer_before', 5);

/**
 * Footer Area Goto Top
 */
if (!function_exists('education_web_footer_gototop')) {
    function education_web_footer_gototop()
    { ?>
        <a class="goToTop" href="#" id="scrollTop">
            <i class="fa fa-angle-up"></i>
            <span><?php esc_html_e('Top', 'education-web'); ?></span>
        </a>
        <?php
    }
}
add_action('education_web_footer_before', 'education_web_footer_gototop', 6);

/**
 * Education Web Footer Widget Area
 */
if (!function_exists('education_web_footer_widget_area')) {

    function education_web_footer_widget_area()
    {

        $top_footer_options = esc_attr(get_theme_mod('education_web_footer_area_two_enable_disable_section', 'enable'));
        $group = get_field('info','options');
        $social = get_field('social','options');

        if (!empty($top_footer_options) && $top_footer_options == 'enable') { ?>
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class=" col-sm-8 col-xs-12">
                            <h4 class="footer-top-title"><?= $group["title"]?></h4>
                            <ul>
                                <li>
                                    <a target="_blank" href="<?= $group["addressUrl"]?>"><?= $group["address"]?></a>
                                </li>
                                <li>
                                    <a target="_blank" href="tel:<?= $group["phone"]?>">Телефон для довідок: <span class="link"><?= $group["phone"]?></span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="mailto:<?= $group["email"]?>">E-mail: <span class="link"><?= $group["email"]?></span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <ul class="social">
                                <li><a target="_blank"  href="<?= $social['instagram']?>"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a></li>
                                <li><a target="_blank"  href="<?= $social['facebook']?>"><i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i></a></li>
                                <li><a target="_blank"  href="<?= $social['youtube']?>"><i class="fa fa-youtube-play fa-2x" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <?php
        }
    }
}
add_action('education_web_footer_widget', 'education_web_footer_widget_area', 10);

/**
 * Top Footer Area
 */
if (!function_exists('education_web_button_footer_before')) {

    function education_web_button_footer_before()
    {

        $footer_button_bg = esc_attr(get_theme_mod('education_web_footer_buttom_area_background_color', '#333333'));

        ?>
        <?php
    }
}
add_action('education_web_button_footer', 'education_web_button_footer_before', 15);

/**
 * Footer Area After
 */
if (!function_exists('education_web_footer_after')) {
    function education_web_footer_after()
    { ?>
        </footer>
        <?php
    }
}
add_action('education_web_footer_after', 'education_web_footer_after', 25);