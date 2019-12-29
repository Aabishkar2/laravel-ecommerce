@push('stylesheets')

@endpush


<div class="main-img full-height stick-top">
	@if(@$places->main_image)
		<?php $image_location = url('/').'/uploads/gallery/main_image/'.$places->main_image; ?>
		<div class="zooming with-overlay" style="background-image: url('{{ $image_location }}');">
	@else
		<div class="zooming with-overlay banner-image">
	@endif
		<div class="main-image-txt center-txt">
			<h1 class="main-header"> {{ @$title }} </h1>
			<hr>
			<p class="sub-header">{{ @$places->short_description }}</p>
			<a href="#" class="btn btn-lg btn-primary hvr-sweep-to-right">Book Now</a>
		</div>	
	</div>
</div>