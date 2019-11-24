<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $data['pageHeading'] = 'Dashboard';
        $data['title'] = 'Admin Panel';
        return view('admin.pages.dashboard', $data);
    }
}
