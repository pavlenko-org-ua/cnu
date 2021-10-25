<?php
/**
 * Header Section Skip Area
 */
if (!function_exists('education_web_skip_links')) {
    /**
     * Skip links
     * @return void
     * @since  1.0.0
     */
    function education_web_skip_links()
    { ?>

        <a class="skip-link screen-reader-text"
           href="#content"><?php esc_html_e('Skip to content', 'education-web'); ?></a>

        <?php
    }
}
add_action('educationweb_skip_links', 'education_web_skip_links', 5);


if (!function_exists('education_web_header_before')) {
    /**
     * Skip links
     * @return void
     * @since  1.0.0
     */
    function education_web_header_before()
    { ?>
        <header id="masthead" class="site-header header">
        <?php
    }
}
add_action('educationweb_header_before', 'education_web_header_before', 10);


if (!function_exists('education_web_top_header')) {
    /**
     * Skip links
     * @return void
     * @since  1.0.0
     */
    function education_web_top_header()
    { ?>

        <?php if (get_theme_mod('education_web_top_header', 1) == 1) { ?>

        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="topbar-inner">
                            <div class="row">
                                <div class="col-md-9 col-sm-12 col-xs-12">
                                    <ul class="contact">
                                        <?php
                                        $email_address = get_theme_mod('education_web_email_address');
                                        $phone_number = get_theme_mod('education_web_phone_number');
                                        $phonenumber = preg_replace("/[^0-9]/", "", $phone_number);
                                        $map_address = get_theme_mod('education_web_map_address');
                                        $open_time = get_theme_mod('education_web_opeening_time');

                                        if (!empty($email_address)) { ?>
                                            <li>
                                                <a target="_blank" href="mailto:<?php echo esc_attr(antispambot($email_address)); ?>">
                                                    <i class="fa fa-envelope"></i>
                                                    <?php echo esc_attr(antispambot($email_address)); ?>
                                                </a>
                                            </li>
                                        <?php } ?>

                                        <?php if (!empty($phone_number)) { ?>
                                            <li>
                                                <a  href="tel:<?php echo esc_attr($phonenumber); ?>">
                                                    <i class="fa fa-phone"></i>
                                                    <?php echo esc_attr($phone_number); ?>
                                                </a>
                                            </li>
                                        <?php } ?>

                                        <?php if (!empty($map_address)) { ?>
                                            <li>
                                                <i class="fa fa-map"></i>
                                                <?php echo esc_attr($map_address); ?>
                                            </li>
                                        <?php } ?>

                                        <?php if (!empty($open_time)) { ?>
                                            <li>
                                                <i class="fa fa-clock-o"></i>
                                                <?php echo esc_attr($open_time); ?>
                                            </li>
                                        <?php } ?>
                                    </ul><!--/ End Contact -->
                                </div>
                                <div class="col-md-3 col-sm-12 col-xs-12">
                                    <?php do_action('educationweb-sociallinks', 5); ?><!--/ End Social -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php }
    }
}
add_action('educationweb_header', 'education_web_top_header', 15);

if (!function_exists('education_web_main_header')) {
    /**
     * Skip links
     * @return void
     * @since  1.0.0
     */
    function education_web_main_header()
    { $social = get_field('social', 'options');?>

        <div class="header-inner">
            <div class="container">
                <div class="header-middle-inner">
                    <div class="logo site-branding d-flex ">
                        <?php
                        if (function_exists('the_custom_logo')) {
                            the_custom_logo();
                        }
                        ?>
                        <div class="text-center header-title" style="flex-grow: 1">
                            <h1 class="site-title">
                                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                                    <?php bloginfo('name'); ?>
                                </a>
                            </h1>
                            <?php
                            $description = get_bloginfo('description', 'display');
                            if ($description || is_customize_preview()) :
                                ?>
                                <p class="site-description"><?php echo $description; ?></p>

                            <?php endif; ?>
                        </div>
                        <button class="menu-toggle header-nav-toggle" data-toggle="collapse"
                                data-target="#site-navigation" aria-controls="site-navigation" aria-expanded="false"
                                aria-label="<?php esc_attr_e('Menu', 'education-web'); ?>">
                            <div class="one"></div>
                            <div class="two"></div>
                            <div class="three"></div>
                        </button><!-- Mobile navbar toggler -->

                    </div><!-- .site-branding & End Logo -->
                    <div class="header-menu-soc">
                        <ul class="header-menu-social-li linkPC">
                            <li><a target="_blank" href="<?= $social['instagram'] ?>"><i class="fa fa-instagram fa-2x"
                                                                         aria-hidden="true"></i></a></li>
                            <li><a target="_blank" href="<?= $social['facebook'] ?>"><i class="fa fa-facebook-official fa-2x"
                                                                        aria-hidden="true"></i></a></li>
                            <li><a target="_blank" href="<?= $social['youtube'] ?>"><i class="fa fa-youtube-play fa-2x"
                                                                       aria-hidden="true"></i></a></li>
                        </ul>
                        <nav id="site-navigation" class="box-header-nav main-menu-wapper main-navigation"
                             role="navigation" aria-label="<?php esc_attr_e('Main Menu', 'education-web'); ?>">

                            <?php
                            wp_nav_menu(array(
                                    'theme_location' => 'menu-1',
                                    'menu' => 'primary-menu',
                                    'container' => '',
                                    'container_class' => '',
                                    'container_id' => '',
                                    'menu_class' => 'main-menu',
                                )
                            );
                            ?>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}
add_action('educationweb_header', 'education_web_main_header', 20);

if (!function_exists('education_web_header_after')) {
    /**
     * Skip links
     * @return void
     * @since  1.0.0
     */
    function education_web_header_after()
    { ?>
        </header><!-- #masthead -->
        <?php
    }
}
add_action('educationweb_header_after', 'education_web_header_after', 25);



