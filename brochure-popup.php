<?php
/**
 * Borchure Pop template
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
    $fullUrl = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; 
  
  $host = basename($fullUrl);
?>

<script>

    //Brochure popup logic
    const $ = jQuery;

     $(document).ready(function() {

        //set popup session storage token
        let sessionToken = window.sessionStorage;

        $(window).scroll(function(){        
            if($(document).scrollTop() > 10 && sessionToken.getItem('popupClosed') != 'true') {
                $('.brochure-popup').fadeIn(500);
            }
        }); 

        //if user is on brochure thank you page set session storage item to true
        if (window.location.href.indexOf("brochure-thank-you") > -1) {
        sessionToken.setItem('popupClosed', 'true');
        }
         $('.brochure-popup__close').click(function(){
            $('.brochure-popup').fadeOut(500).attr('closed', 'true');
            //set token popup closed when popup clicked
            sessionToken.setItem('popupClosed', 'true');
         });
     });

</script>

<?php if(!($host === 'request-a-brochure')) : ?>

<div class="brochure-popup">
    <div class="brochure-popup__container">
        <div class="brochure-popup__close"></div>
        <div class="brochure-popup__logo">
            <a href="/request-a-brochure/">
                <img src="/wp-content/uploads/JB-logo-blk.png" alt="Julius Bahn Logo">    
            </a>    
        </div>
        
        <div class="brochure-popup__text"><a href="/request-a-brochure/">GET OUR 2021 BROCHURE</a></div> 
    </div>
</div>

<?php endif; ?>