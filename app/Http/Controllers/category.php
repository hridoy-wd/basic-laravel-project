<?php

namespace App\Http\Controllers;

use App\Models\CategoryBlog;
use Illuminate\Http\Request;

class category extends Controller
{
    //
    public function index(){
        $allCategory = CategoryBlog::latest()->get();
        return view('admin.category.allCategory', compact('allCategory'));
    }
}
