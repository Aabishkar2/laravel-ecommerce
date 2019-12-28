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
										<li class="media"> 
											<div class="media-left"> 
												<a href="#"><img src="assets/img/team/1-sm.jpg" class="media-object" alt=""></a> 
											</div> 
											<div class="media-body"> 
												<h4 class="media-heading">Kim L. Burney</h4> 
												<div class="rating">
													<span class="icon-star"></span>
													<span class="icon-star"></span>
													<span class="icon-star"></span>
													<span class="icon-star"></span>
													<span class="icon-star-empty"></span>
												</div>
												<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>  
											</div> 
										</li> 
										<li class="media"> 
											<div class="media-left"> 
												<a href="#"><img src="assets/img/team/2-sm.jpg" class="media-object" alt=""></a>
											</div> 
											<div class="media-body"> 
												<h4 class="media-heading">Shing Ch'in</h4> 
												<div class="rating">
													<span class="icon-star"></span>
													<span class="icon-star"></span>
													<span class="icon-star"></span>
													<span class="icon-star"></span>
													<span class="icon-star-empty"></span>
												</div>
												Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. 
											</div> 
										</li> 
									</ul>
								</div>
								<div class="col-sm-6">
									<div class="add-comment">
										<div class="border-box">
											<div class="box-title">Leave a Review</div>
											<div class="form-group">
												<label>Full Name</label>
												<input type="text" class="form-control">
											</div>
											<div class="form-group">
												<label>Email Address</label>
												<input type="text" class="form-control">
											</div>
											<div class="form-group">
												<label>Add Comment</label>
												<textarea class="form-control" rows="6">Comment</textarea>
												<button class="btn btn-primary">Add Comment</button>
											</div>
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
