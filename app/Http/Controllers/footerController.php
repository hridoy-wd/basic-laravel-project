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
}
