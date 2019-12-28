<?php

namespace App\Http\Controllers\User;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\Admin\SubCategory;
use App\Models\User\Cart;

use Session;
use DB;

class HomeController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(Request $request) {
    	$data['title'] = "UPVC Home";
    	return view('users.pages.home', $data);
    }

    public function places(Request $request, $id) {
        $sub_category = $data['sub_category'] = DB::table('sub_categories')->where('id',$request->id)->first();
        $places = $data['places'] = DB::table('details')->where('subcategory_id', $request->id)->first();
    	$data['title'] = $sub_category->name;
        $itinerary = $data['itinerary'] = json_decode($places->itinerary);
        $last_itinerary = end($itinerary);
        $data['total_days'] = $last_itinerary->day;
    	return view('users.pages.places', $data);
    }

    public function categoryProduct(Request $request, $id) {
       
    }

    
}
