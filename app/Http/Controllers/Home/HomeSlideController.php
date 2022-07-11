<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\HomeSlide;
use Illuminate\Http\Request;
use Image;


class HomeSlideController extends Controller
{
    
    public function index(){
        $HomeSlide= HomeSlide::find(1);
        return view('admin.Home_Slide.HomeSlide', compact('HomeSlide'));
    } 
    public function update(Request $request){
        $slide_id = $request->id;
        if($request->file('slide_img')){
          $file = $request->file('slide_img');
          $fileName = date('YmdHi').'.'.$file->getClientOriginalName();
          Image::make($file)->resize(636,852)->save('upload/home_slide/'.$fileName);
          $save_url = 'upload/home_slide/'.$fileName;

          HomeSlide::findOrFail($slide_id)->update([
                'title'=>$request->title,
                'video_url'=>$request->video_url,
                'short_title'=>$request->short_title,
                'slide_img' =>  $save_url
          ]);

        
        }  return redirect()->back()->with('message','successfully update your profile');
   
    }
}
