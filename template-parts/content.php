<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package colton
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<!--	<header class="entry-header">-->
<!--		--><?php
//		if ( is_singular() ) :
//			the_title( '<h1 class="entry-title">', '</h1>' );
//		else :
//			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
//		endif;
//
//		if ( 'post' === get_post_type() ) :
//			?>
<!--			<div class="entry-meta">-->
<!--				--><?php
//				colton_posted_on();
//				colton_posted_by();
//				?>
<!--			</div>-->
<!--            <!-- .entry-meta -->-->
<!--		--><?php //endif; ?>
<!--	</header>-->
    <!-- .entry-header -->
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <?php colton_post_thumbnail(); ?>
            </div>
            <div class="col-lg-7">
                <div>
                    <div class="entry-content">
                        <?php
                        the_content( sprintf(
                            wp_kses(
                            /* translators: %s: Name of current post. Only visible to screen readers */
                                __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'colton' ),
                                array(
                                    'span' => array(
                                        'class' => array(),
                                    ),
                                )
                            ),
                            get_the_title()
                        ) );

                        wp_link_pages( array(
                            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'colton' ),
                            'after'  => '</div>',
                        ) );
                        ?>
                    </div><!-- .entry-content -->
                </div>
            </div>
        </div>
    </div>





	<footer class="entry-footer">
		<?php colton_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
