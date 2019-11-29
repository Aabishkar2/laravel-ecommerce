<?php 
	use App\Models\Admin\SubCategory;
	$categories = DB::table('categories')->where('status','1')->get();
?>
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
                                    <li><a href="{{ '/shop/sub/'.$row->id }}">{{ $row->name }}<i class="fas fa-chevron-right"></i></a></li>
                                @endforeach
                            </ul>
                </li>
            @else
                <li><a href="{{ '/shop/category/'.$row->id }}">{{ $category->name }}<i class="fas fa-chevron-right"></i></a></li>
            @endif
        </li>
        @endforeach
    </ul>
</div>