<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminConteroller extends Controller
{
    public function dashboard(){
        return view('backend.layouts.dashboard');
    }
    public function bikes()
    {
        return view('backend.layouts.bikes');
    }
    public function customers(){
        return view('backend.layouts.customers');
    }
    public function bookings(){
        return view('backend.layouts.bookings');
    }
}
