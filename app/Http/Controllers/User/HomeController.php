<?php

namespace App\Http\Controllers\User;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\Admin\SubCategory;

class HomeController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(Request $request) {
    	$data['title'] = "UPVC Home";
    	return view('users.pages.home', $data);
    }

    public function product(Request $request, $id) {
    	$data['title'] = $request->id." Single Product";
    	return view('users.pages.product', $data);
    }

    
}
