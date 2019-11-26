<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Product;
use DB;

use Auth;


class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $data['pageHeading'] = "Product Management";
        $data['title'] = 'Product Management';
        $data['data'] = Product::orderBy('id','asc')->get();
        return view('admin.pages.products.index', $data);
    }

    public function addEdit(Request $request, $id=0)
    {
        $data['data_value'] = DB::table('products')->where('id', $id)->first();
        $data['title'] = ($id == 0) ? "Add Product" : "Edit Product";
        $data['pageHeading'] = ($id == 0) ? "Add Product" : "Edit Product";
        $data['categories'] = DB::table('categories')->where('status','1')->get();
        $data['sub_categories'] = DB::table('sub_categories')->where('status','1')->get();
        $data['post_url'] =  route('admin.product.update', ['id' => $id]);
        return view('admin.pages.products.add', $data);
    }

    public function update(Request $request, $id=0) {
        $product = ($id == 0) ? new Product : Product::find($id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->product_code = $request->code;
        $product->actual_price = $request->actual_price;
        $product->discounted_price = $request->discounted_price;
        $product->status = $request->status;
        $product->category_id = $request->category;
        $product->sub_category_id = $request->sub_category;
        if($request->image) {
            $this->validate($request, [
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            ]);
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/product/');
                $image->move($destinationPath, $name);
                $product->image = $name;
            }
        }
        $product->size = "na";
        $product->save();
        return redirect(route('admin.product'));
    }
}
