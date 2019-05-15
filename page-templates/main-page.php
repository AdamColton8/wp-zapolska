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
        <section class="our-products-main">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="main-txt mb-lg-3">
                            Продукты для Вашей кожи
                        </h2>
                        <p class="main-sub-txt">
                            Мы продаем только самую качественную кометику. Все товары сертифицированы
                        </p>
                    </div>
                </div>
                <div class="row pt-lg-5">
                    <?php
                    $args = array(
                        'post_type' => 'product',
                        'posts_per_page' => 3
                    );
                    $loop = new WP_Query($args);
                    if ($loop->have_posts()) {
                        while ($loop->have_posts()) : $loop->the_post();
                            wc_get_template_part('content', 'product');
                        endwhile;

                    } else {
                        echo __('No products found');
                    }
                    wp_reset_postdata();
                    ?>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="to-catalog_wrap">
                            <a class="link">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/main-page/see_more.png">
                                <span class="main-sub-txt">Посмотреть каталог</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6"></div>
                    <div class="col-lg-6">
                        <div class="main-txt-wrap">
                            <h2 class="main-txt  mb-lg-5">
                                Актуальные новости отрасли
                            </h2>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <?php
                    $args = array('numberposts' => 2, 'category' => 22, 'orderby' => 'date');
                    $myposts = get_posts($args);
                    foreach ($myposts as $post) {
                        setup_postdata($post);
                        ?>
                        <div class="col-md-6 col-lg-4 col-12">
                            <div class="main-post">
                                <div class="post-img">
                                    <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnail'); ?>
                                    <img src="<?php echo $url ?>"/>
                                </div>
                                <div class="post-txt">
                                    <div class="post-date"><?php echo get_the_date('j F Y'); ?></div>
                                    <h3 class="title-description">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php echo wp_trim_words( get_the_title(), 7, '' ); ?>
                                        </a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    wp_reset_postdata();
                    ?>
                    <div class="col-md-6 col-lg-4 col-12">
                        <div class="to-catalog_wrap">
                            <a class="link">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/main-page/see_more.png">
                                <span class="main-sub-txt">Все новости</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="questions-wrap">
                            <div class="row">
                                <div class="col-12">
                                    <h2></h2>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="accordion" id="accordionFirst">
                                        <div class="wrap-card">
                                            <div class="card-header" id="headingOne">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        Какой интервал по времени должен быть между процедурами?
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="collapseOne" class="collapse collapsed" aria-labelledby="headingOne" data-parent="#accordionFirst">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wrap-card">
                                            <div class="card-header" id="headingTwo">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        Как повлияет процедура лазерной эпиляции на беременность?
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionFirst">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wrap-card">
                                            <div class="card-header" id="headingThree">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        Как повлияет процедура лазерной эпиляции на беременность?
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionFirst">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="accordion" id="accordionSecond">
                                        <div class="wrap-card">
                                            <div class="card-header" id="headingFour">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                                        С чем связаны болезненные ощущения после процедуры?
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="collapseFour" class="collapse collapsed" aria-labelledby="headingFour" data-parent="#accordionSecond">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wrap-card">
                                            <div class="card-header" id="headingFive">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                        Какие рекомендации перед лазерной эпиляцией?
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionSecond">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wrap-card">
                                            <div class="card-header" id="headingSix">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                        Можно ли проводить процедуры по удалению рубцов до 18 лет?
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionSecond">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
