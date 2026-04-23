<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Enquiry;

class EnquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enquiries = Enquiry::latest()->get();
        return view('admin.enquiries.index', compact('enquiries'));
    }

    public function show(Enquiry $enquiry)
    {
        return view('admin.enquiries.show', compact('enquiry'));
    }

    public function destroy(Enquiry $enquiry)
    {
        $enquiry->delete();
        return redirect()->route('admin.enquiries.index')->with('success', 'Enquiry deleted successfully.');
    }
}
