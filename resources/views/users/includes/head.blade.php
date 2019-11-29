<?php 
	use App\Models\Admin\SubCategory;
	$categories = DB::table('categories')->where('status','1')->get();
?>
<header class="header">

		<!-- Top Bar -->

		<div class="top_bar">
			<div class="container">
				<div class="row">
					<div class="col d-flex flex-row">
						<div class="top_bar_contact_item"><div class="top_bar_icon"><img src="images/phone.png" alt=""></div>+38 068 005 3570</div>
						<div class="top_bar_contact_item"></div>
						<div class="top_bar_contact_item"><div class="top_bar_icon"><img src="images/phone.png" alt=""></div>+38 068 005 3570</div>
						&nbsp &nbsp &nbsp &nbsp &nbsp
						<div class="top_bar_contact_item"><div class="top_bar_icon"><img src="images/mail.png" alt=""></div>contact@contact.com</div>
						
					</div>
				</div>
			</div>		
		</div>

		<!-- Header Main -->

		<div class="container clearfix">

		<nav class="navbar navbar-expand-md bg-white navbar-light">
			<a class="navbar-brand" href="#">UPVC</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="ml-5"></div>
			<div class="collapse navbar-collapse" id="collapsibleNavbar">
				<ul class="navbar-nav">
					<li class="nav-item text-uppercase" style="font-weight: 600">
					<a class="nav-link active" href="#">Link</a>
					</li>
					<li class="nav-item text-uppercase" style="font-weight: 600">
					<a class="nav-link" href="#">Link</a>
					</li>
					<li class="nav-item text-uppercase" style="font-weight: 600">
					<a class="nav-link" href="#">Link</a>
					</li>    
				</ul>
			</div>  
			<form class="form-inline" action="/action_page.php">
				<input class="form-control mr-sm-2" type="text" placeholder="Search" required>
				<div class="input-group-append">
					<button class="btn btn-secondary" type="submit">
					<i class="fa fa-search"></i>
					</button>
				</div>
			</form>
		</nav>

		</div>
				
		<!-- Main Navigation -->

	
		
		<!-- Menu -->

	

	</header>