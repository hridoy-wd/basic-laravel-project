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
              Image::make($file)->resize(430,327)->save('upload/blogs_image/'.$fileName);
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

    public function update(Request $request){

      $blog = $request->id;
      if($request->file('blog_image')){
          $file = $request->file('blog_image');
          $fileName = date('YmdHi').'.'.$file->getClientOriginalExtension();
          Image::make($file)->resize(430,327)->save('upload/blogs_image/'.$fileName);
          $saveimage = 'upload/blogs_image/'.$fileName;

          blogg::findOrFail($blog)->update([
              'blog_category_id'=>$request->blog_category_id,
              'blog_title'=>$request->blog_title,
              'blog_tags'=>$request->blog_tags,
              'blog_description'=>$request->blog_description,
              'blog_image'=>$saveimage,
          ]);
          return redirect()->route('all.blog');
      }else{
        blogg::findOrFail($blog)->update([
          'blog_category_id'=>$request->blog_category_id,
          'blog_title'=>$request->blog_title,
          'blog_tags'=>$request->blog_tags,
          'blog_description'=>$request->blog_description,
      ]);
          return redirect()->route('all.blog');
      }
    }

    public function delete($id){
        $blog =  blogg::findOrFail($id);
          $img = $blog->blog_image;
          unlink($img);

          blogg::findOrFail($id)->delete();
          return redirect()->route('all.blog');
    }

    public function blogDetails($id){
          $blogs = blogg::findOrFail($id);
          $categories = CategoryBlog::orderBy('category','ASC')->get();
           return view('frontend.blogDetails', compact('blogs','categories'));
    }

    public function categoryPost($id){
          $blogPost = blogg::where('blog_category_id',$id)->orderBy('id','DESC')->get();
          $categories = CategoryBlog::findOrFail($id);
          return view('frontend.postDetails',compact('blogPost', 'categories'));
    }

    public function blog(){
      $data = blogg::latest()->paginate(3);
      return view('frontend.homeAll', compact('data'));
    }

}
