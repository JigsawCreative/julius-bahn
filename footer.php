<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<!-- Brochure Form & Contact Links -->
  <?php include(locate_template('cta-banner-links.php')); ?>

<!-- New 2021 brochure popup -->
<?php get_template_part('brochure-popup'); ?>  

<footer class="wrapper" id="wrapper-footer">

	<div class="container">

		<div class="row">
			<div class="col-md-6 text-center text-md-left">
				<ul class="contact-details">
					<li>T: <a href="tel:<?php the_field('telephone', 'option'); ?>"><?php the_field('telephone', 'option'); ?></a></li>
					<li>E: <a href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a></li>
				</ul>
			</div><!--col end -->

			<div class="col-md-6">

			</div><!--col end -->
		</div><!-- row end -->

		<div class="row">
			<div class="col-md-6 text-center text-md-right">
				<ul class="social-links">
					<?php if( get_field('twitter', 'option') ): ?>
						<li><a target="_blank" href="<?php the_field('twitter', 'option'); ?>"><i class="fa fa-twitter"></i> </a></li>
					<?php endif; ?>
					<?php if( get_field('facebook', 'option') ): ?>
						<li><a target="_blank" href="<?php the_field('facebook', 'option'); ?>"><i class="fa fa-facebook"></i> </a></li>
					<?php endif; ?>
					<?php if( get_field('pinterest', 'option') ): ?>
						<li><a target="_blank" href="<?php the_field('pinterest', 'option'); ?>"><i class="fa fa-pinterest"></i> </a></li>
					<?php endif; ?>
					<?php if( get_field('linkedin', 'option') ): ?>
						<li><a target="_blank" href="<?php the_field('linkedin', 'option'); ?>"><i class="fa fa-linkedin"></i> </a></li>
					<?php endif; ?>
					<?php if( get_field('instagram', 'option') ): ?>
						<li><a target="_blank" href="<?php the_field('instagram', 'option'); ?>"><i class="fa fa-instagram"></i></a></li>
					<?php endif; ?>
					<?php if( get_field('houzz', 'option') ): ?>
						<li><a target="_blank" href="<?php the_field('houzz', 'option'); ?>"><i class="fa fa-houzz"></i></a></li>
					<?php endif; ?>
				</ul>
			</div><!--col end -->

			<div class="col-md-6 text-center text-md-left order-md-first align-self-center">
				<div class="site-info">
					<p>© <?php echo date("Y"); ?> <?php bloginfo('name'); ?>. <a href="<?php echo get_site_url(); ?>/wp-content/uploads/Julius_Bahn_TCs_July_2020.docx">Terms & Conditions</a>. <a href="<?php echo get_site_url(); ?>/privacy_policy/">Privacy Policy</a>. <a href="sitemap_index.xml">Sitemap</a></p>
				</div><!-- .site-info -->
			</div><!--col end -->
		</div><!-- row end -->

	</div><!-- container end -->

</footer><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>
