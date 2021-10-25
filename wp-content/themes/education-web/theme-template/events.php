<?php
/*
  Template Name: Події
  */

get_header();

do_action( 'education_web_add_breadcrumb', 10 );
?>
<section id="services" class="services single section">
    <div class="container">
        <div class="row">

            <div id="primary" class="col-md-8 col-sm-8 col-xs-12 content-area">
                <main id="main" class="site-main">

                    <div class="services-main">
                        <div class="services-content">
                            <div class="container">
                                <div class="row">
                                    <?php $data = get_field('start_date')?>
                                    <?php if(!empty($data)) : ?>
                                    <h2 style="text-transform: none">
                                        <i class="fa fa-calendar"></i> <?php esc_html_e( 'Start date', 'education-web' ); ?>: <?php echo $data ?>
                                    </h2>
                                    <?php endif; ?>
                                    <?php $data = get_field('end_date')?>
                                    <?php if(!empty($data)) : ?>
                                        <h2 style="text-transform: none">
                                            <i class="fa fa-calendar"></i> <?php esc_html_e( 'End date', 'education-web' ); ?>: <?php echo $data ?>
                                        </h2>
                                    <?php endif; ?>
                                    <?php $data = get_field('geolocation')?>
                                    <?php if(!empty($data)) : ?>
                                        <h2 style="text-transform: none">
                                            <a href="<?php echo $data.["url"]?>">
                                            <i class="fa fa-map-marker"></i> <?php esc_html_e( 'Venue', 'education-web' ); ?>: <?php echo $data["title"] ?></a>
                                        </h2>
                                    <?php endif; ?>

                                </div>
                            </div>
                            <?php
                            while ( have_posts() ) : the_post();

                                get_template_part( 'template-parts/content', 'page' );

                                // If comments are open or we have at least one comment, load up the comment template.
                                if ( comments_open() || get_comments_number() ) :
                                    comments_template();
                                endif;

                            endwhile; // End of the loop.
                            ?>
                        </div>
                    </div>

                </main><!-- #main -->
            </div><!-- #primary -->

            <?php get_sidebar(); ?>

        </div>
    </div>
</section>





<?php
get_footer();
?>
