<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // Homepage function
    public function index() {
        $title = 'Welcome to our Homepage';
        // return view('pages.index', compact('title'));  OR
        return view('pages.index')->with('title', $title);
    }

    // About page function
    public function about() {
        $title = 'This is About Page';
        return view('pages.about')->with('title', $title);
    }

    // Services page function
    public function services() {
        $data = array(
            'title' => 'This is Services Page',
            'services' => ['Web design', 'Graphics design', 'Mobile Application design', 'SEO']
        );
        return view('pages.services')->with($data);
    } 


}
