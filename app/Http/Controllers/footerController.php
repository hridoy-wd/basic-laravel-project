<?php

namespace App\Http\Controllers;

use App\Models\footer;
use Illuminate\Http\Request;

class footerController extends Controller
{
    //
    public function footerPage(){
        $footer = footer::find(1);
        return view('admin.footer.footerpage', compact('footer'));
    }

    public function footerUpdate(Request $request){
        $footers = $request->id;

        footer::find($footers)->update([
            'title1'=>$request->title1,
            'description1'=>$request->description1,

            'title2'=>$request->title2,
            'description2'=>$request->description2,

            'title3'=>$request->title3,
            'description3'=>$request->description3,
            'facebook_link'=>$request->facebook_link,
            'twitter_link'=>$request->twitter_link,

            'copyright'=>$request->copyright,
        ]);

        return redirect()->back();
            
       
    }
}
