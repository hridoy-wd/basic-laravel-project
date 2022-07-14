<?php

namespace App\Http\Controllers;

use App\Models\portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    //
    public function index(){
        $portfolio = portfolio::latest()->get();
        return view('admin.portfolio.all_portfolio',compact('portfolio'));
    }
}
