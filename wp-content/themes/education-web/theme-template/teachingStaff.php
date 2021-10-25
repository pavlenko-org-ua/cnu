<?php
/*
  Template Name: Teaching Staff
  */

get_header();

do_action( 'education_web_add_breadcrumb', 10 );
?>
<section id="team" class="pb-5">
    <div class="container">
        <div class="row">
            <?php $teachings = get_field('teaching'); ?>
            <?php $cycle = $teachings; ?>
                <?php foreach( $cycle  as $cycl ) : ?>
                    <?php
                    $teachingImg = $cycl['photo']['url'];
                    $teachingName = $cycl['names'];
                    $teachingPosition = $cycl['position'];
                    $teachingAbout = $cycl['about'];
                    $subjects = $cycl['subjects'];
                    ?>
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <img src="<?php echo $teachingImg?>" class="img-fluid" width=350>
                        </div>
                        <div class="col-md-8">
                            <h2 class="text-center"><?php echo $teachingName?></h2>
                            <h4 class="text-center"><?php echo $teachingPosition?></h4>
                            <?php if(!empty($teachingAbout)) : ?>
                                <p class="lead my-3">
                                    <?php echo $teachingAbout?>
                                </p>
                            <? endif; ?>
                            <?php if(!empty( $subjects )) : ?>
                            <h3 class="text-center">Викладає:</h3>

                                <?php foreach( $subjects  as $subject ) : ?>
                                <a href="<?php echo $subject['name_subject']['url']?>"> <?php echo $subject['name_subject']['title']?></a>
                                <br>
                                <?php endforeach; ?>
                             <? endif; ?>
                        </div>

                    </div>
                    <hr>
                <?php endforeach; ?>

        </div>
    </div>
</section>
<!-- Team -->
<?php
get_footer();
?>
