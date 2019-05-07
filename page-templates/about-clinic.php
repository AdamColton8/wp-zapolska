<?php
/*
Template Name: about-clinic
*/
get_header();
?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <section class="about-clinic">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="contacts-title">
                                Dr. Zapolska Clinic
                            </h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-lg-4">
                            <div>
                                <?php
                                $photo_ceo = get_field('photo_ceo', 'option');
                                ?>
                                <img src="<?= $photo_ceo['url'] ?>" alt="zapolska">
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-8">
                            <div class="wrap-top-txt">
                                <p class="main-txt">Здравствуйте!</p>
                                <p class="main-txt">Меня зовут Екатерина Запольская, я руководитель клиники Dr.Zapolska
                                    Clinic.</p>
                                <p class="sub-txt">У нас собраны лучшие услуги эстетической медицины, уходовые и
                                    омолаживающие
                                    процедуры, которые поворачивают время вспять.</p>
                                <p class="sub-txt"> За ваши красоту и молодость отвечает команда профессионалов, которые
                                    приобретали
                                    опыт и репутацию в течение 12 лет.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-12"></div>
                        <div class="col-lg-8 col-12">
                            <div class="subtitle-about_txt">
                                <h2>
                                    Мы знаем, что красота и здоровье делают жизнь счастливой
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="wrap-video">
                                <?= get_field('video_clinic', 'option') ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h2 class="subtitle-about_txt_clients">
                                Теплая и уютная атмосфера клиники встречает наших клиентов.
                            </h2>
                        </div>
                        <div class="col-md-12 col-lg-3"></div>
                        <div class="col-md-12 col-lg-7">
                            <p class="description-about">
                                В каждом из наших филиалов к вашим услугам внимательный и квалифицированный админ
                                персонал, который позаботится о вас до и после процедур.
                            </p>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-12">
                            <div class="slider-contacts">
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
                            <div class="about-clinic_new-clinic">
                                <div class="row">
                                    <div class="col-lg-1 col-12 col-md-1"></div>
                                    <div class="col-lg-6 col-md-11 col-12">
                                        <div>
                                            <h2 class="caption">
                                                Открытие филиала нового формата!
                                            </h2>
                                        </div>
                                        <div>
                                            <p class="sub-caption">
                                                Мы рады поделиться с вами новостью об открытии нового филиала нашей
                                                клиники. В наш День Рождения вам подарки от Dr.Zapolska Clinic.
                                            </p>
                                        </div>
                                        <div>
                                            <?php
                                            $logo_lazer = get_field('logo_lazer', 'option');
                                            ?>
                                            <img src="<?= $logo_lazer['url'] ?>" class="logo" alt="logo_lazer">
                                        </div>
                                        <div>
                                            <p>
                                                <!-- Тут какие-нибудь акционные предложения. Очень коротко-->
                                            </p>
                                        </div>
                                        <div>
                                            <a class="btn btn-new-clinic" href="#">записаться на прием</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-12 col-lg-8">
                            <div class="subtitle-about_txt text-center second">
                                <h2>
                                    Мы создаем новую реальность для каждого из наших клиентов
                                </h2>
                            </div>
                            <div class="img_sub-logo">
                                <?php
                                $sub_logo = get_field('sub_logo', 'option');
                                ?>
                                <img src="<?= $sub_logo['url'] ?>" class="sub_logo" alt="sub_logo">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div>
                                <h2 class="subtitle-about_txt_clients second">
                                    Мы верим, что внешность важна.
                                    Но еще важнее хорошее здоровье.
                                </h2>
                            </div>
                            <div class="description-about second">
                                Поэтому заботимся и о первом, и о втором
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="advantages">
                                <div class="row">
                                    <div class="col-lg-4 col-12">
                                        <div class="advantage-item advantage-one"
                                             style="">
                                            <div class="image">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-clinic/time-left.png"
                                                     alt="economy time">
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
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-clinic/crown.png"
                                                     alt="economy time">
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
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-clinic/puzzle.png"
                                                     alt="economy time">
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
                    <div class="row">
                        <div class="col-md-12">
                            <div>
                                <h2 class="subtitle-about_txt_clients second">
                                    Мы знаем, что красота и здоровье делают жизнь счастливой
                                </h2>
                            </div>
                        </div>
                        <div class="col-md-12 col-12">
                            <div class="description-about three">В нашей клинике работают профессионалы.</div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
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
                    <div class="row">
                        <div class="col-md-12">
                            <div>
                                <h2 class="subtitle-about_txt_clients mt-lg-5 mb-lg-3">
                                    Мы делаем то, в чем является профессионалами
                                </h2>
                            </div>
                        </div>
                        <div class="col-md-3"></div>
                        <div class="col-md-6 col-12">
                            <div class="description-about mb-lg-5">Мы - №1 в инъекциях красоты, а также во всех
                                остальных косметологических услугах, которые представлены у нас в клинике.
                            </div>
                        </div>
                    </div>
                    <div class="row">
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
                        <div class="col-12">
                            <h2 class="subtitle-about_txt_clients mt-lg-5 mb-lg-4">Сертификаты</h2>
                        </div>
                        <?php for ($i = 0; $i < 4; $i++): ?>
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="img-cert-wrap">
                                    <?php
                                    $img_sert_one = get_field('img_sert-one', 'option');
                                    ?>
                                    <img src="<?= $img_sert_one['url'] ?>" alt="certificate">
                                </div>
                            </div>
                        <?php endfor; ?>
                    </div>
                </div>
            </section>
            <section class="about-clinic_sub-section">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="title-txt text-center">Отзывы наших клиентов</h2>
                            <p class="subtitle-txt_min">Мы гордимся тем, что уже 12 лет клиника принимает своих
                                клиентов, которые за это время стали не просто клиентами, а Друзьями клиники. А также
                                можем сказать, что к нам приходят обслуживаться целыми семьями, и по несколько
                                поколений!</p>
                        </div>
                        <div class="col-12">
                            <div class="review">
                                <p class="txt-review">
                                    Обожаю эту клинику! Я просто очень заморочена не на антураже, а на людях и, когда
                                    сталкиваюсь с тёплым, комфортным отношением и высоким уровнем профессионализма, что,
                                    согласитесь, не так часто встретишь, - просто «таю»! Подъедьте туда и вы поймёте, о
                                    чём я.
                                </p>
                                <span class="txt-author">
                                    Лариса, 42года
                                </span>
                            </div>
                            <div class="mt-5 text-center">
                                <a href="#" class="btn btn-review m-0-auto">все отзывы</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="about-clinic_making-an-appointment">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="title">Начните свое преображение уже сегодня!</h3>
                            <a href="#" class="btn-review m-0-auto">записаться на прием</a>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
<?php
//get_sidebar();
get_footer();
