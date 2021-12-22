<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class DashboardReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.report.index', [
            'report' => Report::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ValidatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|max:255',
            'categories_id' => 'required',
            'deskripsi' => 'required',
            'posts_id' => 'required|unique'
        ]);
        $ValidatedData['user_id'] = auth()->user()->id;
        $ValidatedData['excerpt'] = Str::limit(strip_tags($request->deskripsi), 100);

        Report::create($ValidatedData);
        return Redirect('/dashboard/report')->with('success', 'Tugas Baru Telah Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function show(Report $report)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function edit(Report $report)
    {
        $rules = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|max:255',
            'categories_id' => 'required',
            'deskripsi' => 'required',
            'posts_id' => 'required'
        ]);
        $ValidatedData['user_id'] = auth()->user()->id;
        $ValidatedData['excerpt'] = Str::limit(strip_tags($request->deskripsi), 100);

        Report::create($ValidatedData);
        return Redirect('/dashboard/report')->with('success', 'Tugas Baru Telah Ditambahkan!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Report $report)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function destroy(Report $report)
    {
        //
    }
}
