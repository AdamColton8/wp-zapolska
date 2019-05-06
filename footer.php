<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package colton
 */

?>

	</div><!-- #content -->
<section class="section-footer">
    <footer class="footer-lg">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-6">
                    <div>
                        <a href="#">
                            <?php
                            $logo_lg = get_field('logo-lg', 'option');
                            ?>
                            <img src="<?= $logo_lg['url'] ?>" alt="logo" class="img-fluid logo-footer-lg">
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="first-txt-column">
                        <?php wp_nav_menu(
                            [
                                'menu'            => 'main_footer'
                            ]
                        );
                        ?>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="second-txt-column">
                        <ul class="second-txt-column-list">
                            <li><a href="#">Лазерная эпиляция</a></li>
                            <li><a href="#">Инъекционные методики</a></li>
                            <li><a href="#">Классическая косметология</a></li>
                            <li><a href="#">Удаление новообразований</a></li>
                            <li><a href="#">SPA-кабинет</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="row row-footer-address">
                        <div class="col-md-12 col-xl-7">
                            <div class="footer-clinics">
                                <div>
                                   <span class="title-txt">
                                       Наши клиники в Киеве:
                                   </span>
                                </div>
                                <div>
                                    <div>
                                       <span class="street-txt">
                                           <?= get_field('address_1', 'option') ?>
                                       </span>
                                    </div>
                                    <div>
                                       <span class="street-txt">
                                            <?= get_field('address_2', 'option') ?>
                                       </span>
                                    </div>
                                    <div>
                                       <span class="title-txt">
                                           Время работы:
                                       </span>
                                    </div>
                                    <div>
                                        <span class="street-txt">пн.-сб. 9:00 - 20:00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-xl-5">
                            <div class="footer-studio">
                                <div>
                                   <span class="title-txt">
                                       Наша студия в Киеве:
                                   </span>
                                </div>
                                <div>
                                   <span class="street-txt">
                                           <?= get_field('address_studio_3', 'option') ?>
                                   </span>
                                </div>
                                <div>
                                   <span class="title-txt">
                                       Время работы:
                                   </span>
                                </div>
                                <div>
                                    <span class="street-txt">пн.-сб. 9:00 - 20:00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row-footer-address-border">

                    </div>
                    <div class="row row-footer-address">
                        <div class="col-md-12 col-xl-9">
                            <div class="title-txt">
                                Предварительная запись обязательна:
                            </div>
                            <div class="phone-info">
                                <a class="phone street-txt" href="tel:<?= get_field('phone_1', 'option') ?>">
                                    <?= get_field('phone_1', 'option') ?>
                                </a>
                                <a class="phone street-txt" href="tel:<?= get_field('phone_2', 'option') ?>">
                                    <?= get_field('phone_2', 'option') ?>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3">
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
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <footer class="footer-sm">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-12">
                    <div>
                        <a href="#">
                            <img src="<?= $logo_lg['url'] ?>" alt="logo" class="img-fluid logo-footer-lg">
	                        <?php
	                        $logo_sm = get_field('logo_sm', 'option');
	                        ?>
                            <img src="<?= $logo_sm['url'] ?>" alt="logo" class="img-fluid logo-footer-mob">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="first-txt-column">

                        <ul class="first-txt-column-list">
                            <li><a href="#">Услуги и цены</a></li>
                            <li><a href="#">О клинике</a></li>
                            <li><a href="#">Магазин</a></li>
                            <li><a href="#">Акции и Новости</a></li>
                            <li><a href="#">Отзывы</a></li>
                            <li><a href="#">Контакты</a></li>
                        </ul>
                    </div>
                    <div class="second-txt-column">
                        <ul class="second-txt-column-list">
                            <li><a href="#">Лазерная эпиляция</a></li>
                            <li><a href="#">Инъекционные методики</a></li>
                            <li><a href="#">Классическая косметология</a></li>
                            <li><a href="#">Удаление новообразований</a></li>
                            <li><a href="#">SPA-кабинет</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-12">
                    <div class="row row-footer-address">
                        <div class="col-md-12 col-xl-7">
                            <div class="footer-clinics">
                                <div>
                                   <span class="title-txt">
                                       Наши клиники в Киеве:
                                   </span>
                                </div>
                                <div>
                                    <div>
                                       <span class="street-txt">
                                           <?= get_field('address_1', 'option') ?>
                                       </span>
                                    </div>
                                    <div>
                                       <span class="street-txt">
                                           <?= get_field('address_2', 'option') ?>
                                       </span>
                                    </div>
                                    <div>
                                       <span class="title-txt">
                                           Время работы:
                                       </span>
                                    </div>
                                    <div>
                                        <span class="street-txt">пн.-сб. 9:00 - 20:00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-xl-5">
                            <div class="footer-studio">
                                <div>
                                   <span class="title-txt">
                                       Наша студия в Киеве:
                                   </span>
                                </div>
                                <div>
                                   <span class="street-txt">
                                       <?= get_field('address_studio_3', 'option') ?>
                                   </span>
                                </div>
                                <div>
                                   <span class="title-txt">
                                       Время работы:
                                   </span>
                                </div>
                                <div>
                                    <span class="street-txt">пн.-сб. 9:00 - 20:00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row-footer-address-border">

                    </div>
                    <div class="row row-footer-address">
                        <div class="col-md-12 col-xl-9">
                            <div class="title-txt">
                                Предварительная запись обязательна:
                            </div>
                            <div class="phone-info">
                                <a class="phone street-txt" href="tel:<?= get_field('phone_1', 'option') ?>">
                                    <?= get_field('phone_1', 'option') ?>
                                </a>
                                <a class="phone street-txt" href="tel:<?= get_field('phone_2', 'option') ?>">
                                    <?= get_field('phone_2', 'option') ?>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3">
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
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</section>
<section class="all-rights-reserved">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div>
                    Все права защищены
                </div>
            </div>
        </div>
    </div>
</section>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
