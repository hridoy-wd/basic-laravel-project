<?php

namespace App\Http\Controllers;

use App\Models\blogg;
use App\Models\CategoryBlog;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Image;
class BlogController extends Controller
{
    //
    public function index(){
        $blogs = blogg::latest()->get();
        return view('admin.blog.allblog',compact('blogs'));
    }

    public function add(){
        $categories = CategoryBlog::orderBy('category','ASC')->get();
        return view('admin.blog.addblog', compact('categories'));
    }

    public function store(Request $request){


              $file = $request->file('blog_image');
              $fileName = date('YmdHi').'.'.$file->getClientOriginalExtension();
              Image::make($file)->resize(234,124)->save('upload/blogs_image/'.$fileName);
              $saveUrl = 'upload/blogs_image/'.$fileName;

              blogg::insert([
                'blog_category_id'=>$request->blog_category_id,
                'blog_title'=>$request->blog_title ,
                'blog_tags'=>$request->blog_tags, 
                'blog_description'=>$request->blog_description, 
                'blog_image'=>$saveUrl, 
                'created_at'=>Carbon::now(),
              ]);

              return redirect()->route('all.blog');      
    }

    public function edit($id){
      $blog = blogg::find($id);
      $categories = CategoryBlog::orderBy('category','ASC')->get();
      return view('admin.blog.editblog',compact('blog', 'categories'));
    }

  

   
}
