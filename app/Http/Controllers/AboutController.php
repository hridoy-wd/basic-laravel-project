<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Image;
class AboutController extends Controller
{
    //
    public function index(){
        $about = About::find(1);
        return view('admin.about.about',compact('about'));
    }

    public function update(Request $request){
     
       $about_id = $request->id;

       if($request->file('about_image')){
        $file = $request->file('about_image');
        $fileName = date('YmdHi').'.'.$file->getClientOriginalName();
        Image::make($file)->resize(444,555)->save('upload/home_slide/'. $fileName);
        $save_url = 'upload/home_slide/'.$fileName;

        About::findOrFail($about_id)->update([
           'title'=>$request->title,
           'short_title'=>$request->short_title,
           'short_descripiton'=>$request->short_descripiton,
           'long_description'=>$request->long_description,
           'about_image'=>$save_url,
        ]);
        return redirect()->back();
       }else{
        About::findOrFail($about_id)->update([
            'title'=>$request->title,
            'short_title'=>$request->short_title,
            'short_descripiton'=>$request->short_descripiton,
            'long_description'=>$request->long_description,
           
         ]);
         return redirect()->back();
       }

     

        
    }

    public function homeAbout(){
        $aboutPage = About::find(1);
        return view('frontend.aboutPage', compact('aboutPage'));
    }
}
