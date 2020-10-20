<?php
/*
  Template Name: Product
*/
?>

<?php get_header(); ?>

  <section class="pb-0">
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
      <h3 class="mb-4"><?php the_field('subheading'); ?></h3>

    </div>
  </section>

  <!-- Content Blocks -->
  <?php
  // check if the flexible content field has rows of data
  $gallery_text_id = -1; // set a count as an id for each gallery & text section
  if( have_rows('product_content_blocks') ): ?>
    <?php $set_grid_layout = get_field( 'set_grid_layout' ); ?>
    <div id="product-content" class="pb-5 <?=$set_grid_layout; ?>">
      <?php // loop through the rows of data
      while ( have_rows('product_content_blocks') ) : the_row();
        if( get_row_layout() == 'text-fw' ): ?>
          <!-- Page Content - Full Width -->

          <?php 
            //if background image set include it in section
            $background_image = get_sub_field( 'background_image' );

            if($background_image) : 
          
          ?>
          
            <section class="<?php the_sub_field('background_colour'); ?> p-xl-0 d-flex flex-column justify-content-center" style="background-image: url(<?=$background_image; ?>); background-size: contain; background-repeat: no-repeat; background-position: center;">

              <div class="container h-100">

                <div class="row h-100">

                  <div class="col-lg-12 d-flex flex-column justify-content-center">

                    <?php the_sub_field('text'); ?>

                  </div>

                </div>

              </div>

            </section>

          <?php else : ?>

            <section class="<?php the_sub_field('background_colour'); ?> p-xl-0 d-flex flex-column justify-content-center">

              <div class="container">

                <div class="row">

                  <div class="col-lg-12">

                    <?php the_sub_field('text'); ?>

                  </div>

                </div>

              </div>

            </section>

          <?php endif; ?>

            

        <?php elseif( get_row_layout() == 'text_image' ): ?>
          <!-- Page Content - Left text -->
          <section class="<?php the_sub_field('background_colour'); ?>">
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
          <section class="<?php the_sub_field('background_colour'); ?>">
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
          <section class="<?php the_sub_field('background_colour'); ?>">
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
          <section class="<?php the_sub_field('background_colour'); ?>">
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

        <?php elseif( get_row_layout() == 'gallery_text' ): ?>
          <!-- Page Content - Gallery Left & Right text -->
          <section class="<?php the_sub_field('background_colour'); ?>">
            <div class="container">
              <div class="row">
                <div class="col-lg-6 my-auto px-5 project-gallery">
                  <?php $images = get_sub_field('product_gallery');
                    if( $images ): ?>
                    <div id="gallery-<?php echo $gallery_text_id ?>" class="carousel slide" data-interval="false">
                      <ol class="carousel-indicators">
                        <?php $indicator_count = 0; // add counter to add active class to the first slide indicator ?>
                        <?php foreach( $images as $image ): ?>
                          <li data-target="#gallery-<?php echo $gallery_text_id ?>" data-slide-to="<?php echo $image['ID']; ?>" class="<?php if ($indicator_count == 0) { echo 'active'; } ?>"></li>
                          <?php $indicator_count++; // increment count ?>
                        <?php endforeach; ?>
                      </ol>
                      <div class="carousel-inner">
                        <?php $slider_count = 0; // add counter to add active class to the first slide ?>
                        <?php foreach( $images as $image ): ?>
                          <div class="carousel-item <?php if ($slider_count == 0) { echo 'active'; } ?>">
                            <img class="d-block w-100" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                          </div>
                          <?php $slider_count++; // increment count ?>
                        <?php endforeach; ?>
                      </div>
                      <a class="carousel-control-prev" href="#gallery-<?php echo $gallery_text_id ?>" role="button" data-slide="prev">
                        <i class="fa fa-angle-left fa-3x" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#gallery-<?php echo $gallery_text_id ?>" role="button" data-slide="next">
                        <i class="fa fa-angle-right fa-3x" aria-hidden="true"></i>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
    
                  <?php endif; ?>
                </div>
                <div class="col-lg-6">
                  <?php // get group fields
                    $content = get_sub_field('content_right');
                  if( $content ): ?>
                    <?php if( $content['title'] ): ?>
                			<h1 class="pb-1"><?php echo $content['title']; ?></h1>
                		<?php endif; ?>
                    <h2 class="mb-4 mt-4 mt-lg-0"><?php echo $content['heading']; ?></h2>
                    <?php echo $content['text']; ?>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </section>

          <?php elseif( get_row_layout() == 'still_image_gallery' ): ?>
          <!-- Page Content - Still Image Gallery -->
          <section class="still-image-gallery <?php the_sub_field('background_colour'); ?>">
            <div class="container">
              <div class="row">
       
                  <?php $images = get_sub_field('image_gallery');
                    if( $images ): ?>
                   
                        
                        <?php foreach( $images as $image ): ?>
                        
                        <div class="col-lg-6 px-5 project-gallery">
                            
                            
                                
                                <a href="<?=$image['caption']; ?>">
                                
                                    <img src="<?=$image['url']; ?>" alt="<?=$image['alt']; ?>" class="d-block w-100"/>
                                
                                </a>
                            
                                <h3 class="text-center my-4"><?php echo esc_html($image['alt']); ?></h3>

                            

                        </div>
                            
                        <?php endforeach; ?>
                  
    
                  <?php endif; ?>
              
              </div>
            </div>
          </section>

      <!-- Standalone Carousel -->
      <?php elseif(get_row_layout() == 'standalone_carousel') : ?>

        <div class="container-fluid d-flex align-items-center justify-content-center">

          <div class="row w-100">

            <div class="standalone-gallery col-lg-12">

              <?php $images = get_sub_field('standalone_gallery');

                if( $images ): ?>

                  <div id="gallery-<?php echo $gallery_text_id ?>" class="carousel slide" data-interval="false">

                    <ol class="carousel-indicators">

                      <?php $indicator_count = 0; // add counter to add active class to the first slide indicator ?>

                      <?php foreach( $images as $image ): ?>

                        <li data-target="#gallery-<?php echo $gallery_text_id ?>" data-slide-to="<?php echo $image['ID']; ?>" class="<?php if ($indicator_count == 0) { echo 'active'; } ?>"></li>

                        <?php $indicator_count++; // increment count ?>

                      <?php endforeach; ?>

                    </ol>

                    <div class="carousel-inner">

                      <?php $slider_count = 0; // add counter to add active class to the first slide ?>

                      <?php foreach( $images as $image ): ?>

                        <div class="carousel-item <?php if ($slider_count == 0) { echo 'active'; } ?>">

                          <img class="d-block w-100" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">

                        </div>

                        <?php $slider_count++; // increment count ?>

                      <?php endforeach; ?>

                    </div>

                    <a class="carousel-control-prev" href="#gallery-<?php echo $gallery_text_id ?>" role="button" data-slide="prev">

                      <i class="fa fa-angle-left fa-3x" aria-hidden="true"></i>

                      <span class="sr-only">Previous</span>

                    </a>

                    <a class="carousel-control-next" href="#gallery-<?php echo $gallery_text_id ?>" role="button" data-slide="next">

                      <i class="fa fa-angle-right fa-3x" aria-hidden="true"></i>

                      <span class="sr-only">Next</span>

                    </a>

                  </div>

              <?php endif; ?>

            </div>
          
          </div>

        </div>

          <!-- Thumbnail carousel -->
		  <?php elseif(get_row_layout() == 'thumb_carousel') : 
          $add_thumbs = get_sub_field( 'add_thumbs' );
        ?>

        <?php if($add_thumbs) : ?>
		  	<section class="thumb-carousel p-0">
			  	<div class="boxed-content">
			  		<div class="">
			  			<div class="">
			  				<div id="thumbcarousel" class="carousel slide">
			        			<div class="carousel-inner col-lg-6">    

                         <?php $thumb_count = 0; ?>

						            <?php foreach( $images as $image ) : ?>
							            <div data-target="#gallery-<?php echo $gallery_text_id ?>" data-slide-to="<?php echo $thumb_count; ?>" class="thumb">
							              <img src="<?php echo $image['url']; ?>" alt="">
							            </div>
						            	<?php $thumb_count++; ?>
						            
						            <?php endforeach; ?>
			        			</div>
			    			</div>			
			  			</div>
			  		</div>
			  	</div>
          <?php $gallery_text_id++; // add one to the counter ?>
			</section>
      <?php endif; ?>
      <?php endif; ?>

        <!-- image block -->
        <?php if(get_row_layout() == 'image_block') : 
            $block_images = get_sub_field( 'block_images' );
          ?>
          <section class="image-block">
             <div class="boxed-content">
               <ul class="images">
                 <?php foreach ($block_images as $block_image) : ?>  
                   <li class="image">
                    <img src="<?php echo $block_image['url']; ?>" alt="">
                    <h3 class="block-image-title"><?=$block_image['alt']; ?></h3>
                   </li>
                 <?php endforeach; ?>
               </ul>
             </div>
           </section> 

        <?php endif; ?>

      <?php endwhile; ?>
    </div>
  <?php endif; ?>

  <!-- Product Projects -->
  <?php  // check if the flexible content field has rows of data
    if( have_rows('projects') ): ?>
      <!-- Project Layout -->
      <section class="bg-light-grey" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/jb-watermark-white-min.png); background-repeat: no-repeat; background-position: bottom right; z-index:-1;">
        <div class="container">
          <h2 class="text-center mb-5"><?php the_field('projects_header'); ?></h2>
          <div class="row">
            <?php $projectid = -1; // set a count as an id for each project
              // loop through the rows of data
              while ( have_rows('projects') ) : the_row(); $projectid++; // add one to the counter ?>

              <?php if( get_row_layout() == 'project' ): ?>
                <!-- Project Gallery -->
                <div class="col-lg-6 px-5 project-gallery">
                  <?php $images = get_sub_field('project_gallery');
                    if( $images ): ?>
                      <div id="product-showcase-<?php echo $projectid ?>" class="carousel slide" data-interval="false">
                        <ol class="carousel-indicators">
                          <?php $indicator_count = 0; // add counter to add active class to the first slide indicator ?>
                          <?php foreach( $images as $image ): ?>
                            <li data-target="#product-showcase-<?php echo $projectid ?>" data-slide-to="<?php echo $image['ID']; ?>" class="<?php if ($indicator_count == 0) { echo 'active'; } ?>"></li>
                            <?php $indicator_count++; // increment count ?>
                          <?php endforeach; ?>
                        </ol>
                        <div class="carousel-inner">
                          <?php $slider_count = 0; // add counter to add active class to the first slide ?>
                          <?php foreach( $images as $image ): ?>
                            <div class="carousel-item <?php if ($slider_count == 0) { echo 'active'; } ?>">
                              <img class="d-block w-100" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                            </div>
                            <?php $slider_count++; // increment count ?>
                          <?php endforeach; ?>
                        </div>
                        <a class="carousel-control-prev" href="#product-showcase-<?php echo $projectid ?>" role="button" data-slide="prev">
                          <i class="fa fa-angle-left fa-3x" aria-hidden="true"></i>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#product-showcase-<?php echo $projectid ?>" role="button" data-slide="next">
                          <i class="fa fa-angle-right fa-3x" aria-hidden="true"></i>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                    <?php endif; ?>
                  <h3 class="text-center my-4"><?php the_sub_field('project_title'); ?></h3>
                </div>

              <?php elseif( get_row_layout() == 'text_block' ): ?>
                <!-- Text Block -->
                <div class="col-lg-6 my-auto">
                  <?php the_sub_field('text'); ?>
                </div>
              <?php endif; ?>
            <?php endwhile; ?>
          </div>
          
        </div>
      </section>
    <?php else : ?>
  <?php endif; ?>

<?php get_footer(); ?>