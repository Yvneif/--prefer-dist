<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Thesis;

class ThesisController extends Controller
{
    public function index()
    {
        $theses = Thesis::all();
        return view('admin.theses.index', compact('theses'));
    }

    public function create()
    {
        return view('admin.theses.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'year' => 'required|integer',
        ]);

        Thesis::create($request->all());

        return redirect()->route('theses.index')->with('success', 'Thesis added successfully!');
    }

    public function edit(Thesis $thesis)
    {
        return view('admin.theses.edit', compact('thesis'));
    }

    public function update(Request $request, Thesis $thesis)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'year' => 'required|integer',
        ]);

        $thesis->update($request->all());

        return redirect()->route('theses.index')->with('success', 'Thesis updated successfully!');
    }

    public function destroy(Thesis $thesis)
    {
        $thesis->delete();
        return redirect()->route('theses.index')->with('success', 'Thesis deleted successfully!');
    }
}

