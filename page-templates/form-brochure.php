<?php
/*
  Template Name: Brochure Request
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
        <div class="col-xl-9">
          <h1><?php the_title(); ?></h1>
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); the_content(); endwhile; endif; ?>
          <?php gravity_form( 2, false, false, false, '', true ); ?>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>