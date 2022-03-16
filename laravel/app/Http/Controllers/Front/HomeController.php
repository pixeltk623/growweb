<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index() {

        $data = [];

        $post['status'] = 1;


        $categories = \App\Models\Admin\Category::getAllCategory($post);

        $data['categories'] = $categories;

        // dd($data);

        return view('front.home', $data);
    }

}
