<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage() {
        return view('homePage');
    }
    public function about() {
        return view('pages.about');
    }
    public function contact() {
        return view('pages.contact');
    }
    public function postShow($id) {
        return 'The parameter for this route is: '.$id;
    }
}

