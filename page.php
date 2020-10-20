<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<section class="">
	<div class="container">

		<!-- Breadcrumbs -->

		<div class="row">
			<div class="col-md-12">
				<h1><?php the_title(); ?></h1>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); the_content(); endwhile; endif; ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
