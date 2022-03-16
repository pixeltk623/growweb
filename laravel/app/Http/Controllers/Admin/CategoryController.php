<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

use Auth;
class CategoryController extends Controller
{
    
    public function index() {

        $data = [];
        $post = [];
        $categories = \App\Models\Admin\Category::getAllCategory($post);
        $data['categories'] = $categories;
        return view('admin.category.index', $data);
    }

    public function create(Request $request) {

        if($request->isMethod('post')) {
            $post = $request->post();

            $rules = [
                'name' => 'required',
                'slug' => 'required|unique:categories'
            ];

            $message = [
                '*.required' => 'The Field is required!',
                'slug.unique'   => 'Slug Must be Unique',
            ];

            $request->validate($rules, $message);

            $input = [
                'name'          => $post['name'],
                'slug'          => $post['slug'],
                'created_by'    => Auth::guard('admin')->user()->id,
                'updated_by'    => Auth::guard('admin')->user()->id,
            ];


            $category = \App\Models\Admin\Category::create($input);

            //dd($category);
            
            if ($category) {
                \App\Models\Activity::create([
                    'type'          => 'Category_create',
                    'data_id'       =>  $category->id,
                    'data'          =>  json_encode($category->toArray()),
                    'user_id'       =>  Auth::guard('admin')->user()->id,
                    'created_by'    =>  Auth::guard('admin')->user()->id
                ]);

                return back()->with('success', 'Category created');

            } else {

                return back()->with('error', 'Something Error');
            }
        } else {
            return view('admin.category.create');
        }
    }

    public function edit($id, Request $request) {
        $findCategoryById = \App\Models\Admin\Category::where('id', $id)->first();
        if($request->isMethod('post')) {
            $post = $request->post();
            $rules = [
                'name' => 'required',
                'slug' => 'required|unique:categories'
            ];

            $message = [
                '*.required' => 'The Field is required!',
                'slug.unique'   => 'Slug Must be Unique',
            ];

            $input = [
                'name'          => $post['name'],
                'slug'          => $post['slug'],
                'updated_at'    => \Carbon\Carbon::now(),
                'updated_by'    => Auth::guard('admin')->user()->id,
            ];

            $request->validate($rules, $message);

            if($findCategoryById->fill($input)->save()) {

                \App\Models\Activity::create([
                    'type'          => 'category_Update',
                    'data_id'       =>  $findCategoryById->id,
                    'data'          =>  json_encode($findCategoryById->toArray()),
                    'user_id'       =>  Auth::guard('admin')->user()->id,
                    'created_by'    =>  Auth::guard('admin')->user()->id
                ]);

                return back()->with('success', 'Category Updated');

            } else {
                return back()->with('error', 'Something Error');
            }

        } else {
            $data['findCategoryById'] = $findCategoryById;
            return view('admin.category.edit',$data);
        }
    }


    public function changeStatus($id, Request $request) {

        $findCategoryById = \App\Models\Admin\Category::where('id', $id)->first();

        //dd( $findCategoryById->id);

        $data['changeStatus'] = \App\Models\Admin\Category::where('id',$id)->pluck('status');

        $data['id'] = $id;

        if($request->isMethod('post')) {

            $post = $request->post();

            if(isset($post['status']) && $post['status']!='') {
                
                $input = [
                    'status'        => $post['status'],
                    'updated_at'    => \Carbon\Carbon::now(),
                    'updated_by'    => Auth::guard('admin')->user()->id,
                ];

                //dd($findCategoryById);

                if($findCategoryById->fill($input)->save()) {

                    \App\Models\Activity::create([
                        'type'          => 'category_status_Update',
                        'data_id'       =>  $findCategoryById->id,
                        'data'          =>  json_encode($findCategoryById->toArray()),
                        'user_id'       =>  Auth::guard('admin')->user()->id,
                        'created_by'    =>  Auth::guard('admin')->user()->id
                    ]);

                    return back()->with('success', 'Category Status created');

                } else {
                    return back()->with('error', 'Something Error');
                }

            } else {
                return back()->with('error', 'Something Error');
            }

        } else {
            return view('admin.category.change_status',$data);
        }
    }
}
