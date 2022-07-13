<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\multiImage;

use Illuminate\Http\Request;
use Image;
use Illuminate\Support\Carbon;
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

    public function multiImage(){
        
        return view('admin.about.multiImage');
    }

    public function storeMultiImage(Request $request){
        $image = $request->file('multi_image');

        foreach ($image as $multi_image) {

           $name_gen = hexdec(uniqid()).'.'.$multi_image->getClientOriginalExtension();  // 3434343443.jpg

            Image::make($multi_image)->resize(220,220)->save('upload/multi_image/'.$name_gen);
            $save_url = 'upload/multi_image/'.$name_gen;

            MultiImage::insert([

                'multi_image' => $save_url,
                'created_at' => Carbon::now()

            ]); 
       
             } // End of the foreach

             return redirect()->back()->with("multi Image store successfully");
    }

    public function all_multi_img(){
        $allMultiImg = MultiImage::all();
        return view('admin.about.multiImageShow', compact('allMultiImg'));

    }//end method

    public function edit_multi_img($id){
             $onellMultiImage = multiImage::findOrFail($id);
             return view('admin.about.editMultiImage', compact('onellMultiImage'));
    }//end method

    public function update_multi_image(Request $request){
        $updateImage = $request->id;

        if($request->file('multi_image')){
            $file = $request->file('multi_image');
            $fileName = date('YmdHi').'.'. $file->getClientOriginalName();
            Image::make($file)->resize(220,220)->save('upload/multi_image/'.$fileName);
            $save_url = 'upload/multi_image/'.$fileName;

            MultiImage::findOrFail( $updateImage)->update([
                'multi_image' => $save_url,
            ]);
            return redirect()->route('all.multi.img')->with("img update successfully");
        }else{

        }   return redirect()->route('all.multi.img')->with("img update successfully");
    }//end method

    public function delete_multi_img($id){
       $member =  MultiImage::findOrFail($id);
       $member->delete();
     
        return redirect()->route('all.multi.img')
                        ->with('success','Product deleted successfully');
    }
}
