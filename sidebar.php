<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package WordPress
 * @subpackage Toolbox
 * @since Toolbox 0.1
 */
?>
		<div id="secondary" class="widget-area group threecol" role="complementary">
			<header id="branding" class="group" role="banner">
					<hgroup>
						 
						<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"> <img src="<?php echo get_template_directory_uri();?>/images/logo.png" alt="logo"></a></h1>
						<!-- <h2 id="site-description"><?php bloginfo( 'description' ); ?>  -->
					</hgroup>
				</header><!-- #branding -->



			<nav id="access" role="navigation">
				<h1 class="assistive-text section-heading"><?php _e( 'Main menu', 'toolbox' ); ?></h1>
				<div class="skip-link screen-reader-text">
					<a href="#content" title="<?php esc_attr_e( 'Skip to content', 'toolbox' ); ?>"><?php _e( 'Skip to content', 'toolbox' ); ?></a>
				</div>

				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav><!-- #access -->




			 <?php if ( 'projects' == get_post_type() || is_page( 'portfolio' )) {
						paginate_links(wp_nav_menu( array('menu' => 'Portfolio' )) ); 
						echo '<span id="more-projects">More Projects</span>';
						} 

			?>
			
<span class="mailto"><a href="mailto:jb@jonathanbartlettstudio.com">jb@jonathanbartlettstudio.com</a></span>

		</div>