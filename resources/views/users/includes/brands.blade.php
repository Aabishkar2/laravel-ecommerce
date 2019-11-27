<div class="brands">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="viewed_title_container">
						<h3 class="viewed_title">Our Brands</h3>
					</div>
					<div class="brands_slider_container">
						
						<!-- Brands Slider -->

						<div class="owl-carousel owl-theme brands_slider">
							<?php for($i=0;$i<=10;$i++) { ?>
							    <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{ asset('images/brands_1.jpg') }}" alt=""></div></div>
                            <?php } ?>
                        </div>
						
						<!-- Brands Slider Navigation -->
						<div class="brands_nav brands_prev"><i class="fas fa-chevron-left"></i></div>
						<div class="brands_nav brands_next"><i class="fas fa-chevron-right"></i></div>

					</div>
				</div>
			</div>
		</div>
	</div>