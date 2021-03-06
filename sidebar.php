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
					<hgroup class="group">
						 
						<a href="<?php echo home_url(   ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"> 
							<?php if(is_page('m')): ?>
								<p><img class="mobile-logo" src="<?php echo get_template_directory_uri();?>/images/logo-mobile@2x.png" alt="logo"></a></p>
								<p class="contact-line"><img src="<?php echo get_template_directory_uri();?>/images/contact-mobile@2x.png" alt="logo"></a></h1></p>
							<?php else: ?>
							<img src="<?php echo get_template_directory_uri();?>/images/logo.png" alt="logo"></a></h1>
							<?php endif; ?>
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


		<div id="tertiary">
			 <?php 	wp_nav_menu( array('menu' => 'Portfolio' ) ); ?>

			<div class="sidebar-nav"><a class="prev">Back |</a> <a class="next">  More Projects</a></div>


 		</div>
 
		  

<span class="mailto"><a href="mailto:jb@bartlettstudio.com">jb@bartlettstudio.com</a></span>

		</div>