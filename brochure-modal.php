<script>

	const $ = jQuery;

	$(window).scroll(function(){        
        if($(document).scrollTop() > 10 && $('#brochureModal').attr('displayed') === 'false') {
            console.log('scroll');
            $('#brochureModal').fadeIn(500);
            $('#brochureModal').attr('displayed', 'true');

            $('.brochure-modal-close').click(function() {
                $('#brochureModal').fadeOut(500);
            });

            $('.close-text-btn').click(function() {
                $('#brochureModal').fadeOut(500);
            });
        }
     }); 
	
    </script>
    
    <div class="modal" id="brochureModal" tabindex="-1" role="dialog" aria-labelledby="brochureModal" aria-hidden="true" displayed="false">
	<div class="modal-dialog bottom-right-fixed" role="document">
		<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLongTitle">Get Our New 2021 Brochure</h5>
			<a class="brochure-modal-close" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</a>
		</div>
		<div class="modal-body brochure-details">
            <div class="brochure-20-image">

                <a href="/request-a-brochure/"><img src="/wp-content/uploads/JuliusBahn_Brochure-2020_cover.jpg" alt="Julius Bahn 2020 Brochure"></a>

            </div>
			
            <div class="brochure-20-text">
            
                <p>Request a copy of our 2020 brochure to view all of our latest designs, handcrafted in South Staffordshire.</p>

            </div>
		</div>
		<div class="modal-footer">
			<a class="btn close-text-btn">Close</a>
			<a href="/request-a-brochure/" class="btn">Get Brochure</a>
		</div>
		</div>
	</div>
	</div>

	<!-- <div class="modal fade" id="brochureModal" tabindex="-1" role="dialog" aria-labelledby="brochureModal" aria-hidden="true" displayed="false">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLongTitle">Get Our New 2020 Brochure</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="modal-body brochure-details">
            <div class="brochure-20-image">

                <a href="/request-a-brochure/"><img src="/wp-content/uploads/JuliusBahn_Brochure-2020_cover.jpg" alt="Julius Bahn 2020 Brochure"></a>

            </div>
			
            <div class="brochure-20-text">
            
                <p>Request a copy of our 2020 brochure to view all of our latest designs, handcrafted in South Staffordshire.</p>

            </div>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn" data-dismiss="modal">Close</button>
			<a href="/request-a-brochure/" class="btn">Get Brochure</a>
		</div>
		</div>
	</div>
	</div> -->