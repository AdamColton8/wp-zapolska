<?php
/*
Template Name: main-page
*/
get_header();
?>
<div id="primary" class="content-area">
    <main id="main" class="site-main main-page">
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
            <div class="container">
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                        <div class="main-txt-wrap">
                            <h2 class="main-txt">
                                Мы делаем то, в чем являемся профессионалами
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-6">
                        <p class="main-sub-txt">
                            Мы - №1 в инъекциях красоты, а также во всех остальных косметологических услугах, которые
                            представлены у нас в клинике.
                        </p>
                    </div>
                </div>
                <div class="row main-posts-wrap">
                    <?php
                    $args = array(
                        'post_type' => 'services',
                        'posts_per_page' => 5,
                        'orderby' => 'title'
                    );
                    $myposts = get_posts($args);
                    foreach ($myposts as $post) {
                        setup_postdata($post);
                        ?>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="custom-post" id="post-<?php the_ID(); ?>">
                                <div class="img-section">
                                    <?php echo get_the_post_thumbnail($id, '', array('class' => 'img-fluid')); ?>
                                </div>
                                <div class="info-section">
                                    <a class="post-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    <span class="post-describe"><?php echo wp_trim_words(get_the_content(), 4, ''); ?></span>
                                </div>

                            </div>
                        </div>
                        <?php
                    }
                    wp_reset_postdata();
                    ?>
                </div>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-8">
                        <div class="main-txt-wrap">
                            <h2 class="main-txt">
                                Высококвалифицированные специалисты
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-6">
                        <p class="main-sub-txt">
                            Предоставление косметологических услуг на высоком профессиональном уровне, разработка
                            индивидуального плана процедур.
                        </p>
                    </div>
                </div>
                <div class="row justify-content-center mb-lg-5">
                    <div class="col-lg-7 col-md-10 col-12">
                        <div class="slider-workers">
                            <?php for ($i = 0; $i < 3; $i++): ?>
                                <div class="slide">
                                    <div class="slide-wrap">
                                        <div class="left-side">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-clinic/img_worker.png"
                                                 alt="economy time">
                                        </div>
                                        <div class="right-side">
                                            <div class="title">
                                                Юлия Фурлет
                                            </div>
                                            <div class="profession">
                                                Косметолог
                                            </div>
                                            <div class="procedures">
                                                Выполняемые процедуры:
                                            </div>
                                            <div class="enumeration">
                                                Лазерная эпиляция, пилинги , чистки, карбокитерапия, контурная
                                                пластика,
                                                PRP, мезотерапия, биоревитализация, диспорт( ботулотоксин типа А),
                                                аппаратная коррекция фигуры.
                                            </div>
                                            <div>
                                                <a class="more" href="#">подробнее</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endfor; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="high-standard">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <h2 class="main-high-txt">Клиника с высокими стандартами</h2>
                        <p class="main-high_sub-txt">
                            Мы гордимся тем, что уже 12 лет клиника принимает своих клиентов, которые за это время стали
                            не просто клиентами, а Друзьями клиники. А также можем сказать, что к нам приходят
                            обслуживаться целыми семьями, и по несколько поколений!
                        </p>
                        <div class="main-divider"></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="wrap-grass">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/main-page/grass.png"
                                 alt="style">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="advantages-main">
                            <div class="row">
                                <div class="col-12">
                                    <span class="advantage-top-txt">
                                        Мы любим людей, поэтому наша работа делает их счастливыми
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-12">
                                    <div class="advantage-item advantage-one"
                                         style="">
                                        <div class="image">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/main-page/time-left_main.png"
                                                 alt="time">
                                        </div>
                                        <div>
                                            <div class="title">
                                                Экономия времени
                                            </div>
                                            <div class="sub-title">
                                                Мы бережем Ваше время - при необходимости у нас есть возможность
                                                проводить несколько процедур одновременно (например,
                                                биоревитализация + лазерная эпиляция).
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-12">
                                    <div class="advantage-item advantage-two">
                                        <div class="image">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/main-page/crown_main.png"
                                                 alt="crown">
                                        </div>
                                        <div>
                                            <div class="title">
                                                Надежность
                                            </div>
                                            <div class="sub-title">
                                                Все процедуры клиники являются воплощением традиционных методик,
                                                безопасность и качество которых проверены специалистами и временем.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-12">
                                    <div class="advantage-item advantage-three">
                                        <div class="image">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/main-page/toy_main.png"
                                                 alt="puzzle">
                                        </div>
                                        <div>
                                            <div class="title">
                                                Целостный подход
                                            </div>
                                            <div class="sub-title">
                                                Мы не только решаем внешнюю проблему, но и ищем причину ее
                                                возникновения. Мы назначаем обследование, даем рекомендации по
                                                питанию, витаминам и добавкам, и включаем наружные процедуры.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-12">
                        <div class="slider-contacts ">
                            <div class="slide">
                                <?php
                                $slide_contacts_one = get_field('slide_contacts_one', 'option');
                                ?>
                                <img src="<?= $slide_contacts_one['url'] ?>" alt="slide1">
                            </div>
                            <div class="slide">
                                <?php
                                $slide_contacts_two = get_field('slide_contacts_two', 'option');
                                ?>
                                <img src="<?= $slide_contacts_two['url'] ?>" alt="slide2">
                            </div>
                            <div class="slide">
                                <?php
                                $slide_contacts_three = get_field('slide_contacts_three', 'option');
                                ?>
                                <img src="<?= $slide_contacts_three['url'] ?>" alt="slide3">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex justify-content-center mt-lg-5">
                            <a href="#" class="btn btn-about-clinic">Больше о клинике</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
<?php
//get_sidebar();
get_footer();
?>
