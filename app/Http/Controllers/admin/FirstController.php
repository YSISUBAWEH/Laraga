<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FirstController extends Controller
{
    public function index()
    {
    	$page = 'Dashboard';
    	$auth = Auth::guard('admin')->user();
    	return view('admin.first',compact('page','auth'));
    }
}
