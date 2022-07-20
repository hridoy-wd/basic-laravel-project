<?php

namespace App\Http\Controllers;

use App\Models\CategoryBlog;
use Carbon\Carbon;
use Illuminate\Http\Request;

class category extends Controller
{
    //
    public function index(){
        $allCategory = CategoryBlog::latest()->get();
        return view('admin.category.allCategory', compact('allCategory'));
    }//end method


    public function add(){
          return view('admin.category.addCategory');
    }//end method


    public function store(Request $request){
     

        CategoryBlog::insert([
             'category'=>$request->category,
             'created_at'=>Carbon::now(),
        ]);
        return redirect()->route('all.category')->with('successfully Add Category');
    }//end method


    public function edit($id){
        $categoryEdit =CategoryBlog::findOrFail($id);
        return view('admin.category.editCategory', compact('categoryEdit'));
    }//end method


    public function update(Request $request){
        $updateCategory = $request->id;

        CategoryBlog::findOrFail($updateCategory)->update([
            'category'=>$request->category,
        ]);


        
        return redirect()->route('all.category');
    }//end method

    public function delete($id){
        CategoryBlog::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Admin Profile Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.category');
    }//end method
}
