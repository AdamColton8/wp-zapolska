<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package colton
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if (post_password_required()) {
    return;
}
?>

<div id="comments" class="comments-area">
    <section class="section-comments">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wrap-comments-product">
                        <?php
                        // You can start editing here -- including this comment!
                        if (have_comments()) :
                            ?>

                            <?php
                            the_comments_navigation();

                            // If comments are closed and there are comments, let's leave a little note, shall we?
                            if (!comments_open()) :
                                ?>
                                <p class="no-comments"><?php esc_html_e('Comments are closed.', 'colton'); ?></p>
                            <?php
                            endif;

                        endif; // Check for have_comments().

                        comment_form();
                        ?>
                        <h2 class="comments-title">


                            <?php

                            /*
                                * $num число, от которого будет зависеть форма слова
                                * $form_for_1 первая форма слова, например Товар
                                * $form_for_2 вторая форма слова - Товара
                                * $form_for_5 третья форма множественного числа слова - Товаров
                                */

                            function pluralForm($num, $form_for_1, $form_for_2, $form_for_5) {

                                $num = abs($num) % 100; // берем число по модулю и сбрасываем сотни (делим на 100, а остаток присваиваем переменной $num)

                                $num_x = $num % 10; // сбрасываем десятки и записываем в новую переменную

                                if ($num > 10 && $num < 20) return $form_for_5; // если число принадлежит отрезку [11;19]

                                if ($num_x > 1 && $num_x < 5) return $form_for_2; // иначе если число оканчивается на 2,3,4

                                if ($num_x == 1) return $form_for_1; // иначе если оканчивается на 1

                                return $form_for_5;
                            }

                            $max_product = get_comments_number(); // число, эта переменная может задаваться через какую-то другую функцию или доставаться из базы - неважно
                            echo $max_product . ' ' . pluralForm($max_product, 'комментарий', 'комментария', 'комментариев'); // в результате получится "5 товаров"

//
//                            $colton_comment_count = get_comments_number();
//                            if ('1' === $colton_comment_count) {
//                                printf(
//                                /* translators: 1: title. */
//                                    esc_html__('Один комментарий на &ldquo;%1$s&rdquo;', 'colton'),
//                                    '<span>' . get_the_title() . '</span>'
//                                );
//                            }
////                            elseif ('2'||'3'||'4' === $colton_comment_count) {
////                                printf(
////                                    esc_html(_nx('%1$s комментария на &ldquo;%2$s&rdquo;', '%1$s комментария на &ldquo;%2$s&rdquo;', $colton_comment_count, 'comments title', 'colton')),
////                                    '<span>' . get_the_title() . '</span>'
////                                );
////                            }
//                            else{
//                                printf( // WPCS: XSS OK.
//                                /* translators: 1: comment count number, 2: title. */
//                                    esc_html(_nx('%1$s комментариев на &ldquo;%2$s&rdquo;', '%1$s комментариев на &ldquo;%2$s&rdquo;', $colton_comment_count, 'comments title', 'colton')),
//                                    number_format_i18n($colton_comment_count),
//                                    '<span>' . get_the_title() . '</span>'
//                                );
//                            }
//                            ?>
                        </h2><!-- .comments-title -->

                        <?php the_comments_navigation(); ?>

                        <ol class="comment-list">
                            <?php
                            wp_list_comments(array(
                                'style' => 'ol',
                                'short_ping' => true,
                            ));
                            ?>
                        </ol><!-- .comment-list -->

                    </div>
                </div>
            </div>
        </div>
    </section>


</div><!-- #comments -->
