<?php
/*
  Template Name: Graduates
  */

get_header();

do_action( 'education_web_add_breadcrumb', 10 );
?>
<main id="team" class="pb-5">
    <div class="container" style="margin-top: 20px">
        <div class="col-md-8 col-sm-8 col-xs-12 content-area">
            <h1 class="text-center my-4">Випусники</h1>
            <div class="row">
                <div id="accordion">
                <?php $graduates = get_field('students'); ?>
                    <?php foreach( $graduates  as $cycl ) : ?>
                        <?php $graduation_year =  $cycl['graduation_year']?>
                                <div class="card">
                                    <div class="card-header" id="heading<?php echo $graduation_year?>">
                                        <h5 class="mt-3">
                                            <a class="btn btn-link btn-link-fio" style="width: 100%" data-toggle="collapse" data-target="#collapse<?php echo $graduation_year?>" aria-expanded="false" aria-controls="collapse<?php echo $graduation_year?>">
                                                Випусники <?php echo $graduation_year?> року
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapse<?php echo $graduation_year?>" class="collapse" aria-labelledby="heading<?php echo $graduation_year?>" data-parent="#accordion">
                                        <?php $students = $cycl['student']; ?>

                                        <?php foreach( $students  as $stydent ) :
                                            $imgUsr = $stydent['foto']['url'];
                                            $imgAlt = $stydent['foto']['alt'];
                                            $name = $stydent['Name'];
                                            $group = $stydent['grupa'];
                                            $info = $stydent['inform'];
                                            ?>

                                        <div class="card-body col-md-4 col my-3">
                                            <div class="card text-center">
                                                <?php if(!empty($imgUsr)) : ?>
                                                    <img src="<?php echo $imgUsr?>" class="card-img-top img-fluid" alt="<?php echo $imgAlt?>">
                                                <?php endif; ?>
                                                <div class="card-body">
                                                    <h2 class="card-title"><?php echo $name?></h2>
                                                    <h3 class="card-title"><?php echo $group?></h3>
                                                    <p class="card-text"> <?php echo $info ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <?php get_sidebar(); ?>
    </div>
</main>
<!-- Team -->
<?php
get_footer();
?>
