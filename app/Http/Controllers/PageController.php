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
    public function test_blade() {
        // $text = 'Sample Dummy Text skdjhtksjdhtk';
        // $text2 = 'Sample Dummy Text 2 ';
        // $showText = true;
        $fruits = [
            'Apple', 'Bananas', 'Jackfruits'
        ];
        // return view('pages.sample')->with('text', $text)->with('text2', $text2);
        // return view('pages.sample', ['text' => $text, 'text2' => $text2]);
        // return view('pages.sample', compact('text', 'text2', 'showText'));
        return view('pages.sample', compact('fruits'));
        
    }
}

