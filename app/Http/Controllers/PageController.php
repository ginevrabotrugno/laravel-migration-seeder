<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;

class PageController extends Controller
{
    public function index() {

        $packages = Package::all();

        return view('home',  compact('packages'));
    }

    public function about() {
        return view('about');
    }

    public function contacts() {
        return view('contacts');
    }


}
