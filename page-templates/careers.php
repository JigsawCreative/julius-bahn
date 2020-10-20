<?php
/*
  Template Name: Careers
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

      <h1><?php the_title(); ?></h1>

      <div class="row">
        <div class="col-lg-6">
          <h3>Designers</h3>
          <p>We require designers to cope with our increasing demand throughout the UK. If you feel you have the qualities required to join our team please send us your CV and covering letter to <a href="mailto:careers@juliusbahn.co.uk">careers@juliusbahn.co.uk</a>.</p>
        </div>
        <div class="col-lg-6">
          <h3>Carpenters</h3>
          <p>We require site carpenters throughout the UK, if you feel you have the qualities to join our team please send us your CV and covering letter to <a href="mailto:careers@juliusbahn.co.uk">careers@juliusbahn.co.uk</a>.</p>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6 mt-lg-4">
          <h3>For all other positions</h3>
          <p>Please send your CV’s to <a href="mailto:careers@juliusbahn.co.uk">careers@juliusbahn.co.uk</a>.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Brochure Form & Contact Links -->
  <?php include(locate_template('cta-banner-links.php')); ?>

<?php get_footer(); ?>
