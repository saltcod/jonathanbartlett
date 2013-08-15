<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Toolbox
 * @since Toolbox 0.1
 */

get_header();
get_sidebar(); ?>

		<div id="primary" class="eightcol last">
			<div id="content" role="main"> 

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'single' ); ?>

				<?php toolbox_content_nav( 'nav-below' ); ?>


			<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>