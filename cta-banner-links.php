<?php
/**
 *
 * CTA Banner links - displayed on most pages
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<?php 
    $fullUrl = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; 
  
  $host = basename($fullUrl);
?>

<?php if(!($host === 'request-a-brochure') || (!$host === 'digital-consultations')) : ?>

    <!-- Brochure Form & Contact Links -->
    <section class="cta-banner bg-blue">
        <div class="container text-center">
            <!-- <span class="cta-text">Find out more:</span> -->
            <a class="btn mx-2" href="<?php echo get_site_url(); ?>/request-a-brochure/" role="button">Request a Brochure</a>

            <!-- Design Consultation Modal -->
            <a href="" class="btn mx-2" role="button" data-toggle="modal" data-target="#DesignConsultation">
              Arrange a Design Consultation
            </a>

            <!-- Modal -->
            <div class="modal fade" id="DesignConsultation" tabindex="-1" role="dialog" aria-labelledby="DesignConsultationLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Arrange a Design Consultation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body text-left">
                    <p>A Design Consultation can be requested via our request a brochure form. Select yes for ‘would you like to arrange a Design Consultation’ and one of our designers will be in touch within 2-3 working days, to arrange an appointment with you.</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn" data-dismiss="modal">Close</button>
                    <a href="<?php echo get_site_url(); ?>/request-a-brochure/" class="btn btn-secondary">Request a Brochure</a>
                  </div>
                </div>
              </div>
            </div>

            <?php if($host !='www.juliusbahn.co.uk/contact/') : ?>

            <a class="btn mx-2" href="<?php echo get_site_url(); ?>/contact/" role="button">Contact Us</a>

            <?php endif; ?>        

        </div>
    </section>
<?php endif; ?>