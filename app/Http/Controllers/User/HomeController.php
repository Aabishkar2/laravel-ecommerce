<?php

namespace App\Http\Controllers\User;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\Admin\SubCategory;
use DB;

class HomeController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(Request $request) {
    	$data['title'] = "UPVC Home";
    	return view('users.pages.home', $data);
    }

    public function product(Request $request, $id) {
        $product = $data['product'] = DB::table('products')->where('id',$request->id)->first();
        $data['category'] = DB::table('categories')->where('id',$product->category_id)->first();
        $data['sub_category'] = DB::table('sub_categories')->where('id',$product->sub_category_id)->first();
    	$data['title'] = $product->name;
    	return view('users.pages.product', $data);
    }

    public function categoryProduct(Request $request, $id) {
        $cat = $request->cat;
        if($cat == "sub"){
            $title = DB::table('sub_categories')->where('id',$request->id)->first();
            $data['title'] = $title->name;
            $data['count'] = DB::table('products')->where('sub_category_id',$request->id)->where('status','1')->count();
            $data['products'] = DB::table('products')->where('sub_category_id',$request->id)->where('status','1')->get();
        } else {
            $title = DB::table('categories')->where('id',$request->id)->first();
            $data['title'] = $title->name;
        }
        
    	return view('users.pages.category', $data);
    }

    
}
