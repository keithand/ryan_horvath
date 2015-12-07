<?php
/**
* The template for displaying all pages.
*
* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages
* and that other 'pages' on your WordPress site will use a
* different template.
*
* @package nerdyowl
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main-front" role="main">
				<h2 class="front-title">Popular Links</h2>
				<div class="front-left">
					<div class="front-top-left">
						<a href="http://69.195.124.241/~ryanhorv/about-ryan/">
							<img src="<?php bloginfo('template_directory'); ?>/images/ryan-horvath.jpg">
							<h3>About Ryan</h3>
						</a>
						<p>Find out about his personal experience.</p>
					</div>
					<div class="front-bottom-left">
						<a href="http://69.195.124.241/~ryanhorv/services/">	
							<img src="<?php bloginfo('template_directory'); ?>/images/man-tree.jpg">
							<h3>Services</h3>
						</a>
						<p>Information on how you can get the help you need.</p>
					</div>
				</div>
				<div class="front-right">
					<div class="front-top-right">
						<a href="http://69.195.124.241/~ryanhorv/common-questions/">	
							<img src="<?php bloginfo('template_directory'); ?>/images/tree-life.jpg">
							<h3>Common Questions</h3>
						</a>
						<p>What questions do people ask about getting started in therapy?</p>
					</div>
					<div class="front-bottom-right">
						<a href="http://69.195.124.241/~ryanhorv/blog/">
							<img src="<?php bloginfo('template_directory'); ?>/images/sunflower.jpg">
							<h3>Blog</h3>
						</a>					
						<p>Read Ryan's latest articles about new discoveries in therapy.</p>
					</div>
				</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
