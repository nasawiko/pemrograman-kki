<?php

namespace App\Http\Controllers;
use App\Models\Report;
use Illuminate\Http\Request;

class ReportCreate extends Controller
{
    public function store(Request $request)
    {
        $ValidatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:reports',
            'categories_id' => 'required',
            'deskripsi' => 'required',
            'posts_id' => 'required'
        ]);
        $ValidatedData['user_id'] = auth()->user()->id;
        $ValidatedData['excerpt'] = Str::limit(strip_tags($request->deskripsi), 100);

        Report::create($ValidatedData);
        return Redirect('success');
        // ->with('success', 'Tugas Telah Dikirim!');
    }
}