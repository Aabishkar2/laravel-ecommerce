
<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="{{ asset('images/shop_background.jpg') }}"></div>
		<div class="home_overlay"></div>
		<div class="home_content d-flex flex-column align-items-center justify-content-center">
			<h2 class="home_title">{{ @$title }}</h2>
		</div>
	</div>

<div class="shop viewed">
	<div class="less-margin-container" style="margin-left: 30px; margin-right: 30px;" >
		<div class="row">
			<div class="col-lg-3">

				@include('users/includes/categories')

			</div>

			<div class="col-lg-1">
			</div>

			<div class="col-lg-8">
				
				<!-- Shop Content -->

				<div class="shop_content">
					<div class="shop_bar clearfix">
						<div class="shop_product_count"><span>{{ @$count }}</span> products found</div>
					</div>

					<div class="product_grid">
						<div class="product_grid_border"></div>

						<!-- Product Item -->

						@foreach($products as $product)
						<a href="{{ '/shop/product/'.$product->id}} ">
							<div class="product_item">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{ asset('uploads/product/'.$product->image) }}" alt=""></div>
								<div class="product_content">
									<div class="product_price">Rs. {{ $product->discounted_price }}</div>
									<div class="product_name"><div><a href="#" tabindex="0">{{ $product->name }}</a></div></div>
								</div>
								<div class="product_fav"><i class="fas fa-heart"></i></div>
							</div>	
						</a>
						@endforeach			

					</div>

					<!-- Shop Page Navigation -->

					<div class="shop_page_nav d-flex flex-row">
						<div class="page_prev d-flex flex-column align-items-center justify-content-center"><i class="fas fa-chevron-left"></i></div>
						<ul class="page_nav d-flex flex-row">
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">...</a></li>
							<li><a href="#">21</a></li>
						</ul>
						<div class="page_next d-flex flex-column align-items-center justify-content-center"><i class="fas fa-chevron-right"></i></div>
					</div>

				</div>

			</div>
		</div>
	</div>
</div>
