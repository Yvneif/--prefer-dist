<?php

namespace App\Http\Controllers;

use App\Models\Thesis;
use Illuminate\Http\Request;

class ThesisController extends Controller
{
    public function index()
    {
        $theses = Thesis::all();
        return view('admin.thesis.index', compact('theses'));
    }

    public function create()
    {
        return view('admin.thesis.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'year' => 'required|digits:4|integer',
            'abstract' => 'required',
            'file' => 'nullable|mimes:pdf|max:2048',
        ]);

        $filePath = null;
        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('thesis_files', 'public');
        }

        Thesis::create([
            'title' => $request->title,
            'author' => $request->author,
            'year' => $request->year,
            'abstract' => $request->abstract,
            'file_path' => $filePath,
        ]);

        return redirect()->route('admin.theses.index')->with('success', 'Thesis added successfully.');
    }

    public function show(Thesis $thesis)
    {
        return view('admin.thesis.show', compact('thesis'));
    }

    public function edit(Thesis $thesis)
    {
        return view('admin.thesis.edit', compact('thesis'));
    }

    public function update(Request $request, Thesis $thesis)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'year' => 'required|digits:4|integer',
            'abstract' => 'required',
            'file' => 'nullable|mimes:pdf|max:2048',
        ]);

        $filePath = $thesis->file_path;
        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('thesis_files', 'public');
        }

        $thesis->update([
            'title' => $request->title,
            'author' => $request->author,
            'year' => $request->year,
            'abstract' => $request->abstract,
            'file_path' => $filePath,
        ]);

        return redirect()->route('admin.theses.index')->with('success', 'Thesis updated successfully.');
    }

    public function destroy(Thesis $thesis)
    {
        $thesis->delete();
        return redirect()->route('admin.theses.index')->with('success', 'Thesis deleted successfully.');
    }
}
