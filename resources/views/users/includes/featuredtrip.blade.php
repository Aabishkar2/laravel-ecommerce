<section class="showcase showcase-bg">
	<div class="main-title">
		<h2>Our Top Destination</h2>
		<p>Explore the top desired places of our fellow trekers.</p>
	</div>
	<div class="container">
		<div class="row item">
			@foreach(@$featured_places as $featured)
				<div class="col-sm-6 col-md-4">
					<div class="item-grid">
						@if(@$featured->main_image)
							<?php $image_location = url('/').'/uploads/gallery/main_image/'.$featured->main_image; ?>
							<div class="item-img" style="background-image: url('{{ $image_location }}');">
						@else
							<div class="item-img banner-image">
						@endif
							<div class="item-overlay">
								<a href="{{ route('user.places',[$featured->subcategory_id]) }}"><span class="icon-binocular"></span></a>
							</div>
						</div>
						<div class="item-desc">
							<div class="item-info">
								<span class="icon-easy"></span>
								<?php 
										$name = DB::table('sub_categories')->where('id',$featured->subcategory_id)->first();
										$last_itinerary = json_decode($featured->itinerary);
										$end_itinerary = end($last_itinerary);
    									$total_days = $end_itinerary->day;
								?>
								<h4 class="title"><a href="#">{{ @$name->name }}</a></h4>
							</div>

							<div class="item-detail">
								<div class="left">
									
									<div class="day"><span class="icon-sun"></span>{{ $total_days }} Days</div>
								</div>
								<div class="right">
									<a href="" class="btn btn-primary hvr-sweep-to-right">Book Now</a>
								</div>
							</div>
						</div>
					</div>
				</div>	
			@endforeach
		</div>	

	</div>
</section>