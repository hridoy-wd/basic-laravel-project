<?php

namespace App\Http\Controllers;

use App\Models\portfolio;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Image;
class PortfolioController extends Controller
{
    //
    public function index(){
        $portfolio = portfolio::latest()->get();
        return view('admin.portfolio.all_portfolio',compact('portfolio'));
    }//end method

    public function add(){
        return view('admin.portfolio.add_portfolio');
    }//end method

    public function store(Request $request){

        $request->validate([
            'portfolio_name' => 'required',
            'portfolio_title' => 'required',
            'portfolio_description' => 'required'
        ]);
        $file = $request->file('portfolio_image');
        $fileName = date('YmdHi').'.'.$file->getClientOriginalExtension();
        Image::make($file)->resize(1020, 519)->save('upload/portfolio_image'.$fileName );
        $saveImage = 'upload/portfolio_image'.$fileName;

        portfolio::insert([
            'portfolio_name'=>$request->portfolio_name,
            'portfolio_title'=>$request->portfolio_title,
            'portfolio_description'=>$request->portfolio_description,
            'portfolio_image'=>$saveImage,
            'created_at'=>Carbon::now()
        ]);
        return redirect()->route('all.portfolio')->with('portfolio added successfully');
    }

}
