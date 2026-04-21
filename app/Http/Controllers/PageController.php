<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function classes()
    {
        return view('classes');
    }

    public function wallOfFame()
    {
        return view('wall-of-fame');
    }

    public function contact()
    {
        return view('contact');
    }

    public function contactSubmit(Request $request)
    {
        // For a 'detailed' project, we would validate and save here
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        return back()->with('success', 'Your query has been sent successfully!');
    }
}
