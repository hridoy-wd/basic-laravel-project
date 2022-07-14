<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //
    public function index(){
        $services = Service::all();
        return view('admin.service.show', compact('services'));
    }// end method

    public function add(){
        return view('admin.service.add');
    }// end method

    public function add_service(Request $request){
        $request->validate([
            'title' => 'required',
            'short_title' => 'required',
            'service_descripition' => 'required',
        ]);
  
        $input = $request->all();
        Service::create($input);
        return redirect()->route('service.show');              
    }// end method


    public function destroy($id){
        $data = Service::findOrFail($id);
        $data->delete();

        return redirect()->back();
    }// end method

    public function edit($id){
        $service = Service::findOrFail($id);
        return view('admin.service.edit', compact('service'));
    }

    public function update(Request $request){
        $service = $request->id;

        Service::findOrFail($service)->update([
            'title'=>$request->title,
            'short_title'=>$request->short_title,
            'service_descripition'=>$request->service_descripition,
        ]);
        return redirect()->route('service.show');
    }
     
        
    
}
