<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\SubCategory;
use App\Models\Admin\Detail;
use DB;

use Auth;


class SubCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() 
    {
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

        $details = ($id == 0) ? new Detail : Detail::where('subcategory_id',$id)->first();
        $details->subcategory_id = $sub_category->id;
        $details->short_description = $request->short_description;
        $details->overview = $request->overview;

        if($request->has('main_image')) {
            $file = $request->file('main_image');
            $ext  = strtolower($file->getClientOriginalExtension());
            if($ext == "png" || $ext == "jpg" || $ext == "jpeg") {
                $filename = "main_image".$sub_category->id.".".$ext;
                $file->move(public_path().'/uploads/gallery/main_image', $filename);
                $details->main_image = $filename; 
            }
        }

        $itinerary = array();
        $i = 0;

         foreach($request->day_detail as $key=>$val)
            {
                if(!empty($val)) {
                    $day = $request->day[$key];
                    $day_detail = $request->day_detail[$key];
                    $itinerary[$i]["day"] = $day;
                    $itinerary[$i]["detail"] = $day_detail;
                    $i++;
                }
            }

        $details->itinerary = json_encode($itinerary);

        if($request->hasfile('image')) {
            $img_ext_id = 0;
            foreach($request->image as $image)
            {

                $ext  = strtolower($image->getClientOriginalExtension());
                if($ext == "png" || $ext == "jpg" || $ext == "jpeg" ) {
                    $filename = $sub_category->id.$img_ext_id.".".$ext;
                    $image->move(public_path().'/uploads/gallery/', $filename);
                    $image_array[$img_ext_id] = $filename;  
                    $img_ext_id++;  
                }
            }
        }

        if(isset($image_array)) {
            $details->images = json_encode($image_array);
        }
        $details->save();
        return redirect(route('admin.sub_category'));
    }
}
