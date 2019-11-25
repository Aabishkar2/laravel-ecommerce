<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\SubCategory;
use DB;

use Auth;


class SubCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $data['pageHeading'] = "Sub-Category Management";
        $data['title'] = 'Sub-Category Management';
        $data['data'] = SubCategory::get();
        return view('admin.pages.sub_categories.index', $data);
    }

    public function addEdit(Request $request, $id=0)
    {
        $data['data_value'] = DB::table('sub_categories')->where('id', $id)->first();
        $data['title'] = ($id == 0) ? "Add" : "Edit";
        $data['category'] = DB::table('categories')->where('status','1')->orderBy('id','asc')->get();
        $data['pageHeading'] = ($id == 0) ? "Add Sub-Category" : "Edit Sub-Category";
        $data['post_url'] =  route('admin.sub_category.update', ['id' => $id]);
        return view('admin.pages.sub_categories.add', $data);
    }

    public function update(Request $request, $id=0) {
        $sub_category = ($id == 0) ? new SubCategory : SubCategory::find($id);
        $sub_category->name = $request->name;
        $sub_category->category_id = $request->category;
        $sub_category->status = $request->status;
        $sub_category->save();
        return redirect(route('admin.sub_category'));
    }
}
