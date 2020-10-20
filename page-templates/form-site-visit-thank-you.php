<?php
/*
  Template Name: Site Visit Thank You
*/
?>

<?php get_header(); ?>

  <section class="">
    <div class="container">

      <!-- Breadcrumbs -->

      <div class="row">
        <div class="col-lg-12">
          <h1>Brochure & Design Consultation Request Sent</h1>
          <h3 class="mb-4">You should receive your brochure within two working days.</h3>
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); the_content(); endwhile; endif; ?>
        </div>
      </div>
    </div>
  </section>

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
