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
						<img src="http://placehold.it/250x250">
						<h3>About Ryan</h3>
					</div>
					<div class="front-bottom-left">
						<img src="http://placehold.it/250x250">
						<h3>Services</h3>
					</div>
				</div>
				<div class="front-right">
					<div class="front-top-right">
						<img src="http://placehold.it/250x250">
						<h3>Common Questions</h3>
					</div>
					<div class="front-bottom-right">
						<img src="http://placehold.it/250x250">
						<h3>Blog</h3>
					</div>
				</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
