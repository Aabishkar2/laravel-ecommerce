<div class="single_product">
		<div class="container">
			<div class="row">
				<!-- Selected Image -->
				<div class="col-lg-5 order-lg-2 order-1">
					<div class="image_selected"><img src="{{ asset('images/fan.jpg') }}" alt=""></div>
				</div>

				<!-- Description -->
				<div class="col-lg-5 order-3">
					<div class="product_description">
						<div class="product_category">{{ $category->name }} > {{ $sub_category->name }}</div>
						<div class="product_name">{{ $product->name }}</div>
						<div class="rating_r rating_r_4 product_rating"><i></i><i></i><i></i><i></i><i></i></div>
						<div class="product_text">{!! $product->description !!}</div>
						<div class="order_info d-flex flex-row">
							<form action="{{ route('user.product.cart') }}">
								{{ csrf_field() }}     
								<div class="clearfix" style="z-index: 1000;">

									<!-- Product Quantity -->
									<div class="product_quantity clearfix">
										<span>Quantity: </span>
										<input type="hidden" name="id" value="{{ $product->id }}">
										<input type="hidden" name="status" value="0">
										<input id="quantity_input" type="text" name="item" pattern="[0-9]*" value="1">
										<div class="quantity_buttons">
											<div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fas fa-chevron-up"></i></div>
											<div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fas fa-chevron-down"></i></div>
										</div>
									</div>

								</div>

								<div class="product_price">Rs. {{ $product->discounted_price }}</div>
								<div class="button_container">
									@if (\Session::has('success'))
										<button type="button" class="button cart_button disabled">Item Already Added</button>
									@else
									<button type="submit" class="button cart_button">Add to Cart</button>
									@endif
									<div class="product_fav"><i class="fas fa-heart"></i></div>
								</div>
								
							</form>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>