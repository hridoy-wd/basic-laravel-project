<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Carbon\Carbon;
use Illuminate\Http\Request;

class contactController extends Controller
{
    //
    public function contact(){
        return view('frontend.contact');
    }

    public function store(Request $request){
        contact::insert([
           'name'=> $request->name,
           'email'=> $request->email,
           'subject'=> $request->subject,
           'budget'=> $request->budget,
           'message'=> $request->message,
           'created_at'=>Carbon::now()
        ]);
        return redirect()->back();
    }

    public function allContact(){
        $contact = contact::latest()->get();
        return view('admin.contact.allcontact', compact('contact'));
    }
}
