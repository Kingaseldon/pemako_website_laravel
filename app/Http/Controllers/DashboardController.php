<?php

namespace App\Http\Controllers;

use App\Models\Accomodation;
use App\Models\Dining;
use App\Models\Gallery;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {
        $room = Accomodation::count();
        $gallery=Gallery::count();
        $dining=Dining::count();
        return view('dashboard', compact('room', 'gallery', 'dining'));
    }
}
