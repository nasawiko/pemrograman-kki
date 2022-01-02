<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class DashboardCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        // if(auth()->user()->username !== 'gawean') {
        //     abort(403);
        
        return view('dashboard.categories.index', [
            'categories' => Categories::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.categories.create');
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
            'name' => 'required',
            'slug' => 'required|unique:categories',
            'img_category' => 'required',
        ]);
        Categories::create($ValidatedData);
        return Redirect('/dashboard/categories')->with('success', 'Tugas Baru Telah Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function show(Categories $categories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function edit(Categories $category)
    {
        return view('dashboard.categories.edit', [
            'categories' => $category,

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categories $category)
    {
        $rules = [
            'name' => 'required',
            // 'slug' => 'required|unique:categories',
            'img_category' => 'required',
        ];
        if ($request->slug != $category->slug) {
            $rules['slug'] = 'required|unique:categories';
        };
        $validatedData = $request->validate($rules);
        Categories::where('id', $category->id)->update($validatedData);
        return Redirect('/dashboard/categories')->with('success', 'Tugas Baru Telah Ditambahkan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categories $category)
    {
        // $category->posts()->delete();
        // $category = category::all();
        // $category->posts()->where('category_id', $category->id)->delete();
      
        Categories::destroy($category->id);
        return Redirect('/dashboard/categories')->with('oke', 'Tugas Selesai/Dihapus!');
    }
}
