<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\DanceClass;
use App\Models\Enquiry;
use App\Models\GalleryItem;
use App\Models\Testimonial;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'students' => Student::count(),
            'classes' => DanceClass::count(),
            'enquiries' => Enquiry::count(),
            'gallery' => GalleryItem::count(),
            'testimonials' => Testimonial::count(),
        ];

        $recentEnquiries = Enquiry::latest()->take(5)->get();
        $recentStudents = Student::latest()->take(5)->get();

        return view('admin.dashboard', compact('stats', 'recentEnquiries', 'recentStudents'));
    }
}
