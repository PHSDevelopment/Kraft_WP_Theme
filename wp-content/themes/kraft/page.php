<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package kraft
 */

get_header(); ?>

	<div class="sidebar-left">
        <ul class="menu"></ul>
    </div>

    <div class="banner">
        <img src="Assets/images/Support-2.jpg" />
    </div>

	<div class="content-body">
        <div class="content-body-left" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</div><!-- .content-body-left -->

		<div class="content-body-right">
            <?php get_template_part( 'template-parts/content', 'sharethis' ); ?>
        </div><!-- .content-body-right -->
	</div><!-- .content-body -->

<?php
get_sidebar();
get_footer();
