<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    
    public function index() {

        if(!is_null(Auth::guard('admin')->user())){
            return view('admin.dashboard');
        } else {
            return redirect()->route('admin.login');
        }

        
    }

}
