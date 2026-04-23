<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DanceClass;
use App\Models\Faq;
use App\Models\GalleryItem;
use App\Models\Testimonial;

class PageController extends Controller
{
    public function home()
    {
        $faqs = Faq::orderBy('order')->get();
        $featuredGallery = GalleryItem::where('is_featured', true)->take(6)->get();
        $testimonials = Testimonial::where('is_published', true)->latest()->get();
        return view('home', compact('faqs', 'featuredGallery', 'testimonials'));
    }

    public function about()
    {
        return view('about');
    }

    public function classes()
    {
        $classes = DanceClass::with('prices')->get();
        return view('classes', compact('classes'));
    }

    public function wallOfFame()
    {
        $gallery = GalleryItem::latest()->get();
        return view('wall-of-fame', compact('gallery'));
    }

    public function contact()
    {
        $classes = DanceClass::all();
        return view('contact', compact('classes'));
    }

    public function contactSubmit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'nullable',
            'dance_class_id' => 'nullable|exists:dance_classes,id',
            'message' => 'required'
        ]);

        \App\Models\Enquiry::create($request->all());

        return back()->with('success', 'Your query has been sent successfully!');
    }
}
