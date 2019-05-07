<?php
/*
Template Name: main-page
*/
get_header();
?>
<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <section class="main-page">
            <div class="main-slider">
                <?php for ($i = 0; $i < 3; $i++): ?>
                <div class="wrap-slide">

                    <div class="text">
                        <div>
                            <p class="first-line"><?= get_field('first_line', 'option') ?></p>
                        </div>
                        <div>
                            <h2 class="second-line"><?= get_field('second_line', 'option') ?></h2>
                        </div>
                        <div class="third-line">
                            <?= get_field('third_line', 'option') ?>
                        </div>
                        <div>
                            <a href="#" class="btn btn-review">подробнее</a>
                        </div>
                    </div>
                    <div class="img">
                        <?php
                        $main_slide_one = get_field('main_slide_one', 'option');
                        ?>
                        <img src="<?= $main_slide_one['url'] ?>" alt="slide-one">
                    </div>

                </div>

                <?php endfor; ?>
            </div>
        </section>
    </main>
</div>
<?php
//get_sidebar();
get_footer();
?>
