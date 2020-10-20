<?php
/*
  Template Name: FAQs
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
        <div class="col">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); the_content(); endwhile; endif; ?>
        </div>
      </div>

      <!-- FAQs -->
      <div class="row faqs">
        <div class="col-xl-9">

          <!-- FAQ Section -->

          <!-- check if the repeater field has rows of data -->
          <?php if( have_rows('faq_section') ):
           	// loop through the rows of data
              while ( have_rows('faq_section') ) : the_row(); ?>
                <div class="faq-section">
                  <!-- display the FAQ heading -->
                  <h2><?php the_sub_field('faq_heading'); ?></h2>
                  <div id="accordion">
                    <!-- display the FAQ -->

                    <?php
                      //$sectionid = get_sub_field( 'faq_id' );
                      $sectionid = uniqid('faq');
                      $count = 0;
                    ?>

                    <!-- check if the repeater field has rows of data -->
                    <?php if( have_rows('faq') ):
                       	// loop through the rows of data
                          while ( have_rows('faq') ) : the_row(); ?>

                            <div id="<?php echo esc_attr( $sectionid ); ?>" class="card">
                              <a class="card-header" id="heading-<?php echo esc_attr( $sectionid ); ?>-<?php echo esc_attr( $count ); ?>" href="#collapse-<?php echo esc_attr( $sectionid ); ?>-<?php echo esc_attr( $count ); ?>" data-toggle="collapse" data-target="#collapse-<?php echo esc_attr( $sectionid ); ?>-<?php echo esc_attr( $count ); ?>" aria-expanded="true" aria-controls="collapse-<?php echo esc_attr( $sectionid ); ?>-<?php echo esc_attr( $count ); ?>">
                                <h5 class="mb-0"><?php the_sub_field('question'); ?></h5>
                              </a>
                              <div id="collapse-<?php echo esc_attr( $sectionid ); ?>-<?php echo esc_attr( $count ); ?>" class="collapse" aria-labelledby="heading-<?php echo esc_attr( $sectionid ); ?>-<?php echo esc_attr( $count ); ?>" data-parent="#accordion">
                                <div class="card-body">
                                  <?php the_sub_field('answer'); ?>
                                </div>
                              </div>
                            </div>

                            <?php $count ++; ?>

                          <?php endwhile; ?>
                        <?php else : ?>
                    <?php endif; ?>

                  </div>
                </div>
              <?php endwhile; ?>
            <?php else : ?>
          <?php endif; ?>

        </div>
      </div>

    </div>
  </section>

<?php get_footer(); ?>
