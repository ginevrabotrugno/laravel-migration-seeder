<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function formatBoolean($value){

        if ($value) {
            return '<span style="color:green;">Sì</span>';
        } else {
            return '<span style="color:red;">No</span>';
        }
    }

    public function index() {
        $trains = Train::all();

        $formatBoolean = function($value) {
            return $this->formatBoolean($value);
        };

        return view('home', compact('trains'))->with('formatBoolean', $formatBoolean);
    }

    public function about() {
        return view('about');
    }

    public function contacts() {
        return view('contacts');
    }


}
