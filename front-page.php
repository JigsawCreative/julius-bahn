<?php get_header(); ?>

	<!-- New 2020 brochure modal -->
	<!-- <?php get_template_part('brochure-modal'); ?> -->

	<!-- Main Slider -->
	<?php

		$images = get_field('home-slider');

		if( $images ): ?>
			<div id="home-carousel" class="carousel slide" data-ride="carousel">
				
				<div class="carousel-inner" role="listbox">

		    	<?php foreach( $images as $image ): ?>
						<div class="carousel-item" style="background-image: url(<?php echo $image['url']; ?>;">
							<img class="" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
			        <div class="carousel-caption d-none d-md-block">
			          <p class="lead"><?php echo $image['caption']; ?></p>
			        </div>
			      </div>
					<?php endforeach; ?>
				<div class="row justify-content-center">
					<div class="carousel-overlay">
						<div class="arrow bounce">
							<a class="fa fa-angle-down fa-2x" href="#"></a>
						</div>
					</div>
				</div>
	    </div>
		</div>
	<?php endif; ?>

	<!-- Content Blocks -->
	<?php
		// check if the flexible content field has rows of data
		if( have_rows('home_content_blocks') ):
	   	// loop through the rows of data
	  	while ( have_rows('home_content_blocks') ) : the_row();
	      if( get_row_layout() == 'text_image_left_align' ): ?>
					<!-- Page Content - Left text -->
					<section class="<?php the_sub_field('background_colour'); ?>">
						<div class="container">
						  <div class="row">
								<div class="col-lg-6 my-auto">
									<?php // get group fields
										$content = get_sub_field('content-left');
									if( $content ): ?>
								    <h2 class=""><?php echo $content['heading']; ?></h2>
										<h3 class=""><?php echo $content['subheading']; ?></h3>
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

				<?php elseif( get_row_layout() == 'text_image_center' ): ?>
					<!-- Page Content - Text with Image below Centered -->
					<section class="<?php the_sub_field('background_colour'); ?>">
						<div class="container">
						  <div class="row">
								<div class="col-md-10 offset-md-1">
									<?php // get group fields
									$content = get_sub_field('content_centered');
									if( $content ): ?>
										<h2 class=""><?php echo $content['heading']; ?></h2>
										<h3 class=""><?php echo $content['subheading']; ?></h3>
										<?php echo $content['text']; ?>
									<?php endif; ?>
									<?php $image_centered = get_sub_field('image_centered'); ?>
                  <img class="d-block mx-auto" src="<?php echo $image_centered['url']; ?>" alt="<?php echo $image_centered['alt']; ?>">
								</div>
						  </div>
						</div>
					</section>

				<?php elseif( get_row_layout() == 'text_image_right_align' ): ?>
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
										<h3 class=""><?php echo $content['subheading']; ?></h3>
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
								<div class="col-lg-4 my-auto">
									<?php // get group fields
										$content = get_sub_field('content_left');
									if( $content ): ?>
										<h2 class=""><?php echo $content['heading']; ?></h2>
										<h3 class=""><?php echo $content['subheading']; ?></h3>
										<?php echo $content['text']; ?>
									<?php endif; ?>
								</div>
								<div class="col-lg-8">
									<?php $image_right = get_sub_field('image_right'); ?>
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
										<h3 class=""><?php echo $content['subheading']; ?></h3>
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
