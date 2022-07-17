<?php

namespace App\Http\Controllers;

use App\Models\blogg;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function index(){
        $blogs = blogg::latest()->get();
        return view('admin.blog.allblog',compact('blogs'));
    }

    public function add(){
        return view('admin.blog.addblog');
    }
}
