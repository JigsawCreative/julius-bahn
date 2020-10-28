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