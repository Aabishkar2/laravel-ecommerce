<div class="trip-detail">
		<div class="container">
			<div class="tab-wrap">

				<ul id="trip-tab" class="nav nav-tabs affix-top" data-spy="affix" data-offset-top="1290" >
					<li class="active"><a href="#overview" data-toggle="tab">Overview</a></li>
					<li class=""><a href="#itenary" data-toggle="tab">Itenary</a></li>
					<li class=""><a href="#reveiws" data-toggle="tab">Reviews</a></li>
				</ul>

				<div class="tab-content paper-effect">

					<div class="tab-pane active" id="overview">
						<div class="row">
							<div class="col-sm-12">
								{!! @$places->overview !!}
							</div>
						</div>
					</div>

					<div class="tab-pane" id="itenary">
						<div class="row">
							<div class="col-sm-12">
								<ul class="itenary-steps">
									@foreach($itinerary as $row)
									<li>
										<div class="icon-none"></div>
										<div class="day-number">Day {{ $row->day }}</div>
										<div class="detail">{{ $row->detail }}</div>
									</li>
									@endforeach
								</ul>
							</div>
						</div>		
					</div>

					<div class="tab-pane" id="reveiws">
						<div class="review-comment">
							<br>
							<div class="row">
								<div class="col-sm-6">
									<ul class="media-list review-comment"> 
										@foreach($reviews as $review)
										<li class="media"> 
											<div class="media-left"> 
												<a href="#"><img src="assets/img/team/1-sm.jpg" class="media-object" alt=""></a> 
											</div> 
											<div class="media-body"> 
												<h4 class="media-heading">{{ @$review->full_name }}</h4> 
												<div class="rating">
													@for($i=0;$i<$review->rating;$i++)
														<span class="icon-star"></span>
													@endfor
												</div>
												<p>{{ @$review->comment }}</p>  
											</div> 
										</li> 
										@endforeach
									</ul>
								</div>
								<div class="col-sm-6">
									<form action="{{ route('user.reviews') }}">
										<div class="add-comment">
											<div class="border-box">
												<div class="box-title">Leave a Review</div>
												<div class="form-group">
													<label>Full Name</label>
													<input type="text" name="full_name" maxlength="50" class="form-control">
												</div>
												<div class="form-group">
													<label>Email Address</label>
													<input type="text" name="email" maxlength="50" class="form-control">
												</div>
												<div class="form-group">
													<label>Rating</label>
													<select class="form-control" name="rating">
														<option value="5" class="form-control">5</option>
														<option value="4" class="form-control">4</option>
														<option value="3" class="form-control">3</option>
														<option value="2" class="form-control">2</option>
														<option value="1" class="form-control">1</option>
													</select>
												</div>
												<div class="form-group">
													<label>Add Comment</label>
													<textarea class="form-control" name="comment" maxlength="500" placeholder="Comment" rows="6"></textarea>
													<input type="hidden" name="subcategory_id" value="{{ @$places->subcategory_id }}">
													<button type="submit" class="btn btn-primary">Add Comment</button>
												</div>
											</div>
										</div>
									</form>

								</div>
							</div>


						</div>
					</div>

				</div>
			</div>
		</div>
	</div>


			<br>
			<br>
