@push('stylesheets')
	
@endpush


<div class="main-img full-height stick-top">
	<div class="zooming with-overlay banner-image">
		<div class="main-image-txt center-txt">
			<h1 class="main-header"> {{ @$title }} </h1>
			<hr>
			<p class="sub-header">{{ @$places->short_description }}</p>
			<a href="#" class="btn btn-lg btn-primary hvr-sweep-to-right">Explore Now</a>
		</div>	
	</div>
</div>