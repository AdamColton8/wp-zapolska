<?php
/*
Template Name: contacts
*/
get_header();
?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <section class="section-contacts">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="contacts-title">
                                Контакты Dr. Zapolska clinic
                            </h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-lg-5 col-xl-6">
                            <div class="studios-wrap">
                                <div class="clinics">
                                    <div>
                                        <span class="clinic-title-txt">
                                            Наши клиники в Киеве:
                                        </span>
                                    </div>
                                    <div class="address-info">
                                        <div class="">
                                            <div class="street-wrap">
                                                <i class="fas fa-map-marker-alt"></i>
                                                <span class="street-txt"><?= get_field('address_1', 'option') ?></span>
                                            </div>
                                            <div>
                                                <a href="#" class="look-at-map">
                                                    Посмотреть на карте
                                                </a>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="street-wrap">
                                                <i class="fas fa-map-marker-alt"></i>
                                                <span class="street-txt"><?= get_field('address_2', 'option') ?></span>
                                            </div>
                                            <div>
                                                <a href="#" class="look-at-map">
                                                    Посмотреть на карте
                                                </a>
                                            </div>
                                        </div>
                                        <div class="work-time-wrap">
                                            <div>
                                                <span class="clinic-title-txt">Время работы:</span>
                                            </div>
                                            <div >
                                                <span class="street-txt">Пн-Сб</span>
                                                <span class="work-time">9:00 - 20:00</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="studios">
                                    <div>
                                        <span class="clinic-title-txt">
                                            Наша студия в Киеве:
                                        </span>
                                    </div>
                                    <div>
                                        <div class="street-wrap">
                                            <i class="fas fa-map-marker-alt"></i>
                                            <span class="street-txt">
                                                <?= get_field('address_studio_3', 'option') ?>
                                            </span>
                                        </div>
                                        <div>
                                            <a href="#" class="look-at-map">
                                                Посмотреть на карте
                                            </a>
                                        </div>
                                    </div>
                                    <div class="work-time-wrap">
                                        <div>
                                            <span class="clinic-title-txt">Время работы:</span>
                                        </div>
                                        <div >
                                            <span class="street-txt">Пн-Сб</span>
                                            <span class="work-time">9:00 - 20:00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-7 col-xl-6">
                            <div class="map-box">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2540.815563913786!2d30.59080541611183!3d50.44453597947446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cf8d4a90461d%3A0x19912456a5c4f08c!2z0YPQuy4g0K3QvdGC0YPQt9C40LDRgdGC0L7QsiwgNDksINCa0LjQtdCyLCAwMjAwMA!5e0!3m2!1sru!2sua!4v1549729375772" width="100%" height="100%"  frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                            <div class="border-contacts-map">

                            </div>
                            <div class="row row-pre-order-tablet">
                                <div class="col-md-8">
                                    <div class="clinic-title-txt clinic-title-txt-tablet">
                                        Предварительная запись обязательна:
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="social-links social-links-flex-end">
                                        <div>
                                            <a href="<?= get_field('facebook', 'option') ?>">
                                                <i class="fab fa-facebook"></i>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="<?= get_field('instagram', 'option') ?>">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="<?= get_field('youtube', 'option') ?>">
                                                <i class="fab fa-youtube mr-0"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row row-tel-info-tablet">
                                <div class="col-12">
                                    <div class="phone-info">
                                        <i class="fas fa-phone phone-reverse"></i>
                                        <a class="phone" href="tel: <?= get_field('phone_1', 'option') ?>">
                                            <?= get_field('phone_1', 'option') ?>
                                        </a>
                                        <a class="phone" href="tel: <?= get_field('phone_2', 'option') ?>">
                                            <?= get_field('phone_2', 'option') ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row row-pre-order">
                        <div class="col-md-4">
                            <div class="clinic-title-txt">
                                Предварительная запись обязательна:
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="social-links social-links-flex-end">
                                <div>
                                    <a href="<?= get_field('facebook', 'option') ?>">
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                </div>
                                <div>
                                    <a href="<?= get_field('instagram', 'option') ?>">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                                <div>
                                    <a href="<?= get_field('youtube', 'option') ?>">
                                        <i class="fab fa-youtube mr-0"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row row-tel-info">
                        <div class="col-12">
                            <div class="phone-info">
                                <i class="fas fa-phone phone-reverse"></i>
                                <a class="phone" href="tel:<?= get_field('phone_1', 'option') ?>">
                                    <?= get_field('phone_2', 'option') ?>
                                </a>
                                <a class="phone" href="tel:<?= get_field('phone_1', 'option') ?>">
                                    <?= get_field('phone_2', 'option') ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
<!--            --><?php
//            while ( have_posts() ) :
//                the_post();
//
//                get_template_part( 'template-parts/content', 'page' );
//
//                // If comments are open or we have at least one comment, load up the comment template.
//                if ( comments_open() || get_comments_number() ) :
//                    comments_template();
//                endif;
//
//            endwhile; // End of the loop.
//            ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
//get_sidebar();
get_footer();