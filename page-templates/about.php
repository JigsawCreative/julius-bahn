<?php
/*
  Template Name: About
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
        <div class="col-lg-4 my-auto">
          <h1><?php the_title(); ?></h1>
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); the_content(); endwhile; endif; ?>
        </div>
        <div class="col-lg-8">
          <?php $image = get_field('about-image');
          if( !empty($image) ): ?>
          	<img class="p-md-4" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- Content Blocks -->
  <?php
    // check if the flexible content field has rows of data
    if( have_rows('about_content_blocks') ):
      // loop through the rows of data
      while ( have_rows('about_content_blocks') ) : the_row();
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

  <!-- Testimonials -->
  <section class="bg-light-grey">
    <div class="container">
      <div class="row">
        <div id="testimonial" class="col-lg text-center text-lg-left">
          <blockquote class="blockquote px-3">
            <p class="mb-0">“The whole process of working with Julius Bahn has been a great experience - we would have no hesitation in recommending JB to our friends.”</p>
            <footer class="blockquote-footer">MR A JONES, <cite title="Source Title">GUILFORD</cite></footer>
          </blockquote>
        </div>
        <div id="testimonial" class="col-lg text-center text-lg-left">
          <blockquote class="blockquote px-3">
            <p class="mb-0">“We are pleased with our Garden Room and Patio window and your service. The two fitters who came to erect it were very efficient, helpful and polite.”</p>
            <footer class="blockquote-footer">MR & MRS COVE, <cite title="Source Title">CHELTENHAM</cite></footer>
          </blockquote>
        </div>
        <div id="testimonial" class="col-lg text-center text-lg-left">
          <blockquote class="blockquote px-3">
            <p class="mb-0">“We are delighted with the service we received and the beautiful Garden Room where we now spend most of our time.”</p>
            <footer class="blockquote-footer">MR & MRS BUCKINGHAM, <cite title="Source Title">OXON</cite></footer>
          </blockquote>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
