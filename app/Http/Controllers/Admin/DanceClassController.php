<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DanceClass;
use App\Models\ClassPrice;

class DanceClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classes = DanceClass::with('prices')->get();
        return view('admin.classes.index', compact('classes'));
    }

    public function create()
    {
        return view('admin.classes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'schedule' => 'required',
            'instructor' => 'required',
            'image' => 'nullable|image|max:2048',
            'prices' => 'required|array|min:1',
            'prices.*.label' => 'required',
            'prices.*.price' => 'required',
        ]);

        $data = $request->only(['name', 'description', 'schedule', 'instructor']);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('classes', 'public');
        }

        $class = DanceClass::create($data);

        foreach ($request->prices as $index => $priceData) {
            $class->prices()->create([
                'label' => $priceData['label'],
                'price' => $priceData['price'],
                'slots' => $priceData['slots'] ?? null,
                'valid_till' => $priceData['valid_till'] ?? null,
                'condition' => $priceData['condition'] ?? null,
                'order' => $index
            ]);
        }

        return redirect()->route('admin.classes.index')->with('success', 'Class created successfully.');
    }

    public function edit(DanceClass $class)
    {
        $class->load('prices');
        return view('admin.classes.edit', compact('class'));
    }

    public function update(Request $request, DanceClass $class)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'schedule' => 'required',
            'instructor' => 'required',
            'image' => 'nullable|image|max:2048',
            'prices' => 'required|array|min:1',
            'prices.*.label' => 'required',
            'prices.*.price' => 'required',
        ]);

        $data = $request->only(['name', 'description', 'schedule', 'instructor']);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('classes', 'public');
        }

        $class->update($data);

        // Update Prices: Delete old and create new for simplicity (or sync)
        $class->prices()->delete();
        foreach ($request->prices as $index => $priceData) {
            $class->prices()->create([
                'label' => $priceData['label'],
                'price' => $priceData['price'],
                'slots' => $priceData['slots'] ?? null,
                'valid_till' => $priceData['valid_till'] ?? null,
                'condition' => $priceData['condition'] ?? null,
                'order' => $index
            ]);
        }

        return redirect()->route('admin.classes.index')->with('success', 'Class updated successfully.');
    }

    public function destroy(DanceClass $class)
    {
        $class->delete();
        return redirect()->route('admin.classes.index')->with('success', 'Class deleted successfully.');
    }
}
