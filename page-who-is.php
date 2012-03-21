<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Toolbox
 * @since Toolbox 0.1
 */

get_header(); 
get_sidebar(); ?>

	<div id="primary" class="group eightcol last">

				<div class="hello">
 					<img src="<?php echo get_template_directory_uri();?>/images/hello-welcome.png" alt="Hello and Welcome"> 
				</div>


	<div id="content" role="main">
 
			<div class="avatar who-is">
 					<img src="<?php echo get_template_directory_uri();?>/images/jonathanbartlett-avatar.png"> 
				</div>



			<div class="bio who-is">
					<p>Jonathan grew up in a small Pennsylvania town outside of Harrisburg and currently lives and works in Brooklyn, NY. He has done work for a wide variety of clients in various markets, receiving awards and recognitions from American Illustration, The Society of Illustrators, Spectrum Fantasy Art, 3x3 Magazine, and The Art Directors Club. He has an MFA from the School of Visual Arts, Illustration as Visual Essay program. </p>
					<p>Jonathan was recently named a winner in the Art Directors Club Young Guns 2011 competition and was awarded a silver medal by the Society of Illustrators for his poster work with The Bridge Theatre Company.</p>
					<p>If you are interested in more (mostly) useless knowledge about Jonathan, look <a href=" http://www.mymodernmet.com/profiles/blogs/fighting-our-inner-demons-15">here</a> and <a href="http://nonslick.blogspot.com/2011/01/jonathan-bartlett.html">here</a>.</p>
					<p>For a more extensive catalog of work take a look <a href="http://illoz.com/jonathanbartlett">here</a>.</p>
				</div>


	

				<div class="twentyfour-hours who-is">
					<p>24 HR SERVICE</p>
					<strong><em>JONATHAN BARTLETT</em></strong> <br />
					<a href="mailto:jb@jonathanbartlettstudio.com">jb@jonathanbartlettstudio.com</a>
					336.345.0369<br />
					Follow me on <a href="http://twitter.com/#">Twitter</a><br />
					Find me on <a href="#">Illoz</a><br />
				</div>	


				<div class="recognitions who-is">
					<h4>RECOGNITIONS:</h4>
					<ul>
						<li>The Art Directors Club Young Guns 9</li>
						<li>American Illustration Annual </li>
						<li>The Society of Illustrators Annual </li>
					  <li>(silver medal 2011)</li>
						<li>Spectrum Fantasy Art Annual</li>
						<li>3 x3 Magazine Annual <br> (silver medal 2009, 2010)</li>
						<li>New England Press Association <br>(silver medal 2009)</li>
						<li>CMYK Magazine	</li>
					</ul>
				</div>


	
				<div class="clients who-is">
					<h4>PARTIAL CLIENT LIST:</h4>
					<ul>
						<li>New York Times</li>
						<li>Los Angeles Times</li>
						<li>Plansponsor Magazine</li>
						<li>Wired</li>
						<li>Harvard Business Review </li>
						<li>The Atlantic</li>
						<li>Stanford Alumni Magazine</li>
						<li>Runner's World</li>
						<li>Christianity Today </li>
						<li>Playboy</li>
						<li>Money</li>
						<li>Fortune</li>
						<li>Mother Jones</li>
						<li>ESPN</li>
						<li>The Stranger</li>
						<li>Spirit Magazine</li>
						<li>Field & Stream </li>
						<li>FSG Books For Young Readers </li>
						<li>WW Norton Book Publishers</li>
						<li>Candlewick Press</li>
						<li>Darling Design Agency </li>
						<li>New York City Mass Transit  Authority</li>
						<li>Pierre Pont Hicks</li>
						<li>The Bridge Theatre Company</li>	
					</ul>
					</div>

					<div class="things-i-love who-is">
							<h4>THINGS I LOVE:</h4>
							<p>The woods, humor, hard work, bow ties, leather shoes, rap music, rock and roll, ice Hockey, Marty McFly, Claude Monet, and China.	</p>
						</div>


				<div class="sincerely who-is">
					<img src="<?php echo get_template_directory_uri();?>/images/sincerely.png" alt="sincerely, JB">
				</div>







			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>