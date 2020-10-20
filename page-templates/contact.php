<?php
/*
  Template Name: Contact
*/
?>

<?php get_header(); ?>

  <section class="">
    <div class="container">

      <!-- Breadcrumbs -->
      <div class="breadcrumbs mb-2" typeof="BreadcrumbList" vocab="http://schema.org/">
        <?php if(function_exists('bcn_display'))
          {
            bcn_display();
          }
        ?>
      </div>

      <div class="row">
        <div class="col-lg-6 text-center text-md-left my-auto">
          <h2><?php the_field('contact-header'); ?></h2>
          <?php the_field('contact-text'); ?>
  				<ul class="contact-details">
  					<li><strong>T:</strong> <a class="tel" href="tel:<?php the_field('telephone', 'option'); ?>"><?php the_field('telephone', 'option'); ?></a></li>
  					<li><strong>E:</strong> <a class="email" href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a></li>
  					<li class="pt-3"><?php the_field('address_line_1', 'option'); ?>, <?php the_field('address_line_2', 'option'); ?>,<br> <?php the_field('town', 'option'); ?>, <?php the_field('county', 'option'); ?>, <?php the_field('postcode', 'option'); ?>, UK</li>
  				</ul>
          <p><strong>Office Working Hours:</strong></br>
          <?php the_field('office_hours', 'option'); ?></p>
        </div>
        <div class="col-lg-6">
          <?php $image = get_field('contact-image');
          if( !empty($image) ): ?>
          	<img class="p-md-4" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
