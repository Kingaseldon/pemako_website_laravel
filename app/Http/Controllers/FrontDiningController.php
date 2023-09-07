<?php

namespace App\Http\Controllers;

use App\Models\Dining;
use Illuminate\Http\Request;

class FrontDiningController extends Controller
{
    public function index(){
        $dinings = Dining::all();
        return view('frontend.pages.dining', compact('dinings'));
    }
}
