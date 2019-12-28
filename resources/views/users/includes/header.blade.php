
<?php 
  $categories = DB::table('categories')->where('status','1')->get();
?>
<header class="nav-menu fixed">
 <nav class="navbar normal transparent">
  <div class="container-fluid">
   <div class="navbar-header">
    <a class="navbar-brand" href="index.html">
      <img src="assets/img/logo.png" alt="Mold Discover Html Template">
    </a>
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
  </div>

  <div class="navbar-collapse collapse" id="main-navbar">
     <ul class="nav navbar-nav">
       	<li>
       		<a href="#">Home</a>
       	</li>
        @foreach($categories as $category)
         	<li class="dropdown">
         		<a href="#">{{ @$category->name }}</a>
            <?php $sub_categories = DB::table('sub_categories')->where('category_id',$category->id)->where('status','1')->get();?>
         		<ul class="dropdown-menu">
              @foreach($sub_categories as $subcategory)
         			  <li><a href="">{{ $subcategory->name }}</a></li>
              @endforeach
         		</ul>
         	</li>
        @endforeach
        <li>
          <a href="#">About Us</a>
        </li>
        <li>
          <a href="#">Contact</a>
        </li>
      </ul> 
  </div>
</div>
</nav>
</header>