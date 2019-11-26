<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Category;
use DB;

use Auth;


class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $data['pageHeading'] = "Category Management";
        $data['title'] = 'Category Management';
        $data['data'] = Category::orderBy('id','asc')->get();
        return view('admin.pages.categories.index', $data);
    }

    public function addEdit(Request $request, $id=0)
    {
        $data['data_value'] = DB::table('categories')->where('id', $id)->first();
        $data['title'] = ($id == 0) ? "Add" : "Edit";
        $data['pageHeading'] = ($id == 0) ? "Add Category" : "Edit Category";
        $data['post_url'] =  route('admin.category.update', ['id' => $id]);
        return view('admin.pages.categories.add', $data);
    }

    public function update(Request $request, $id=0) {
        $category = ($id == 0) ? new Category : Category::find($id);
        $category->name = $request->name;
        $category->status = $request->status;
        $category->save();
        return redirect(route('admin.category'));
    }
}
