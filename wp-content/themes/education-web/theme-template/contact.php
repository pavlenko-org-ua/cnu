<?php
/*
  Template Name: Contact
  */

get_header();

do_action('education_web_add_breadcrumb', 10);
?>
<section id="team" class="pb-5">
    <div class="container">
        <div class="row text-center card contactStr">
            <?php $contact = get_field('contacts'); ?>
            <?php foreach ($contact as $cycl) : ?>
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-body">
                            <h2 class=" text-uppercase my-3 card-title"><?= $cycl['item']['title'] ?></h2>
                            <ul>
                                <li>
                                    <a class="card-link"
                                       href="tel:<?= $cycl['item']['phone'] ?>"><?= $cycl['item']['phone'] ?></a>
                                </li>
                                <li>
                                    <a class="card-link"
                                       href="mailto:<?= $cycl['item']['mail'] ?>"><?= $cycl['item']['mail'] ?></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- Team -->
<?php
get_footer();
?>
