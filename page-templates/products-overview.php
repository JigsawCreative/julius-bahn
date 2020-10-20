<?php
/*
  Template Name: Products Overview
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

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); the_content(); endwhile; endif; ?>

      <?php

        $args = array(
            'post_type'      => 'page', //write slug of post type
            'posts_per_page' => -1,
            'post_parent'    => '50', //place here id of your parent page
            'order'          => 'ASC',
            'orderby'        => 'menu_order',
         );

        $childrens = new WP_Query( $args );

        if ( $childrens->have_posts() ) : ?>
          <div class="row">
            <?php while ( $childrens->have_posts() ) : $childrens->the_post(); ?>
              <div id="child-<?php the_ID(); ?>" class="col-lg-4 col-md-6 product-card">
                <?php
                  $image = get_field('overview_image');
                  if( !empty($image) ): ?>
                  	<a href="<?php the_permalink(); ?>"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></a>
                <?php else : ?>
                  <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/img/temp/products-overview/coming-soon.gif" alt="">
                <?php endif; ?>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p><?php the_field('overview_text'); ?></p>
                <a class="btn btn-green" href="<?php the_permalink(); ?>" role="button">Find Out More</a>
              </div>
            <?php endwhile; ?>
          </div>
        <?php endif; wp_reset_query(); ?>

    </div>

  </section><!-- Main -->

  <!-- Content Blocks -->
  <?php
    // check if the flexible content field has rows of data
    if( have_rows('product_overview_content_blocks') ):
      // loop through the rows of data
      while ( have_rows('product_overview_content_blocks') ) : the_row();
        if( get_row_layout() == 'text_image' ): ?>
          <!-- Page Content - Left text -->
          <section id="<?php the_sub_field('section_id'); ?>" class="<?php the_sub_field('background_colour'); ?>">
            <div class="container">
              <div class="row">
                <div class="col-lg-6 my-auto">
                  <?php // get group fields

                    $content = get_sub_field('content_left');

                  if( $content ): ?>
                    <h2 class=""><?php echo $content['heading']; ?></h2>
                    <?php echo $content['text']; ?>
                  <?php endif; ?>
                </div>
                <div class="col-lg-6">
                  <?php $image_right = get_sub_field('image_right'); ?>
                  <img class="p-5" src="<?php echo $image_right['url']; ?>" alt="<?php echo $image_right['alt']; ?>">
                </div>
              </div>
            </div>
          </section>

        <?php elseif( get_row_layout() == 'image_text' ): ?>
          <!-- Page Content - Right text -->
          <section id="<?php the_sub_field('section_id'); ?>" class="<?php the_sub_field('background_colour'); ?>">
            <div class="container">
              <div class="row">
                <div class="col-lg-6">
                  <?php $image_left = get_sub_field('image_left'); ?>
                  <img class="p-5" src="<?php echo $image_left['url']; ?>" alt="<?php echo $image_left['alt']; ?>">
                </div>
                <div class="col-lg-6 my-auto">
                  <?php // get group fields

                    $content = get_sub_field('content_right');

                  if( $content ): ?>
                    <h2 class=""><?php echo $content['heading']; ?></h2>
                    <?php echo $content['text']; ?>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </section>

        <?php elseif( get_row_layout() == 'text_image-2:1' ): ?>
          <!-- Page Content - Left text (2:1 Size Ratio) -->
          <section id="<?php the_sub_field('section_id'); ?>" class="<?php the_sub_field('background_colour'); ?>">
            <div class="container">
              <div class="row">
                <div class="col-lg-8 my-auto">
                  <?php // get group fields

                    $content = get_sub_field('content_left');

                  if( $content ): ?>
                    <h2 class=""><?php echo $content['heading']; ?></h2>
                    <?php echo $content['text']; ?>
                  <?php endif; ?>
                </div>
                <div class="col-lg-4">
                  <?php $image_right = get_sub_field('image_right2:1'); ?>
                  <img class="p-5" src="<?php echo $image_right['url']; ?>" alt="<?php echo $image_right['alt']; ?>">
                </div>
              </div>
            </div>
          </section>

        <?php elseif( get_row_layout() == 'image_text-2:1' ): ?>
          <!-- Page Content - Right text (2:1 Size Ratio) -->
          <section id="<?php the_sub_field('section_id'); ?>" class="<?php the_sub_field('background_colour'); ?>">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <?php $image_left = get_sub_field('image_left'); ?>
                  <img class="p-5" src="<?php echo $image_left['url']; ?>" alt="<?php echo $image_left['alt']; ?>">
                </div>
                <div class="col-lg-4 my-auto">
                  <?php // get group fields

                    $content = get_sub_field('content_right');

                  if( $content ): ?>
                    <h2 class=""><?php echo $content['heading']; ?></h2>
                    <?php echo $content['text']; ?>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </section>

        <?php endif; ?>

      <?php endwhile; ?>

    <?php endif; ?>

<?php get_footer(); ?>
