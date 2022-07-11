<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class adminController extends Controller
{
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login')->with('message','logout successfully');;
    }

    public function profile(){
      $id = Auth::user()->id;
      $adminData = User::find($id);
      return view('admin.admin_profile', compact('adminData'));
    }

    public function edit(){
        $id= Auth::user()->id;
        $editData=User::find($id);
        return view('admin.admin_edit', compact('editData'));
    }

   
    public function store(Request $request){
        $id= Auth::user()->id;
        $data=User::find($id);
        $data ->name = $request ->name;
        $data ->username = $request ->username;
        $data ->email = $request ->email;
        
        if($request -> file('profile_image')){
            $file = $request -> file('profile_image');
            $fileName = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin_image'), $fileName);
            $data['profile_image'] = $fileName;
        }

        $data -> save();


        return redirect()->route('admin.profile')->with('message','successfully update your profile');


    }
}
