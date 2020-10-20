<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<div class="wrapper" id="error-404-wrapper">

	<div class="container" id="content" tabindex="-1">
		<div class="row">
			<div class="col-md-12 content-area" id="primary">
				<main class="site-main py-5" id="main">
					<section class="error-404 not-found">
							<h1 class="page-title"><?php esc_html_e( 'Oops! Sorry, that page can&rsquo;t be found.',	'understrap' ); ?></h1>
							<p>Sorry, we couldn't find that page you were looking for. Maybe it's moved, or maybe the URL is incorrect.</p>
							<ul class="">
								<li>Check that the URL you entered is correct.</li>
								<li>Return to our home page by clicking <a href="<?php echo esc_url( home_url( '/' ) ); ?>">here</a></li>
								<li>Alternatively, use the navigation menu above to find what you need.</li>
							</ul>
						</div><!-- .page-content -->
					</section><!-- .error-404 -->
				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!-- .row -->
	</div><!-- #content -->
</div><!-- #error-404-wrapper -->

<?php get_footer(); ?>
