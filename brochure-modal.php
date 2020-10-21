<script>

	const $ = jQuery;

	$(window).scroll(function(){        
        if($(document).scrollTop() > 2000 && $('#brochureModal').attr('displayed') === 'false') {
            $('#brochureModal').modal('show');
            $('#brochureModal').attr('displayed', 'true');
        }
     }); 
	
	</script>

	<div class="modal fade" id="brochureModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" displayed="false">
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
			<a href="/request-a-brochure/" type="button" class="btn">Get Brochure</a>
		</div>
		</div>
	</div>
	</div>