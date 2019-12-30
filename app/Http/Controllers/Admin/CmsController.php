<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Cms;
use DB;

use Auth;


class CmsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $data['pageHeading'] = "CMS Management";
        $data['title'] = 'CMS Management';
        $data['data'] = Cms::orderBy('id','asc')->get();
        return view('admin.pages.cms.index', $data);
    }

    public function addEdit(Request $request, $id=0)
    {
        $data['data_value'] = DB::table('cms')->where('id', $id)->first();
        $data['title'] = ($id == 0) ? "Add" : "Edit";
        $data['pageHeading'] = ($id == 0) ? "Add" : "Edit";
        $data['post_url'] =  route('admin.cms.update', ['id' => $id]);
        return view('admin.pages.cms.add', $data);
    }

    public function update(Request $request, $id=0) {
        $cms = ($id == 0) ? new Cms : Cms::find($id);
        $cms->name = $request->name;
        $cms->nice_name = $request->nice_name;
        $cms->status = $request->status;
        $cms->content = $request->content;
        $cms->save();
        return redirect(route('admin.cms'));
    }
}
