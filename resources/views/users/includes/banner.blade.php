<?php 
	use App\Models\Admin\SubCategory;
	$categories = DB::table('categories')->where('status','1')->get();
?>
<div class="container">
	<div class="row">
		<div class="col-sm-4">				
			<div class="cat_menu_container">
				<div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
					<div class="cat_burger"><span></span><span></span><span></span></div>
					<div class="cat_menu_text" style="padding: 15px;">categories</div>
				</div>
				<ul class="cat_menu">
					@foreach($categories as $category)
						<?php $sub = SubCategory::hasSubCategory($category->id); ?>
						@if($sub)
							<li class="hassubs">
								<a href="#">{{ $category->name }}<i class="fas fa-chevron-right"></i></a>
										<ul>
											@foreach($sub as $row)
												<li><a href="#">{{ $row->name }}<i class="fas fa-chevron-right"></i></a></li>
											@endforeach
										</ul>
							</li>
						@else
							<li><a href="#">{{ $category->name }}<i class="fas fa-chevron-right"></i></a></li>
						@endif
					</li>
					@endforeach
				</ul>
			</div>
		</div>
		<div class="col-sm-8">
			<div class="banner">
				<div class="banner_background" style="background-image:url({{ asset('images/banner_background.jpg') }})"></div>
				<div class="container fill_height">
					<div class="row fill_height">
						<div class="col-lg-5 offset-lg-4 fill_height">
							<div class="banner_content">
								<h1 class="banner_text">new era of upvc products</h1>
								<div class="banner_price"><span>Rs. 530</span>Rs. 460</div>
								
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	