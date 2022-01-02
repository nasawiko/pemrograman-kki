<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Posts;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use illuminate\Support\Str;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Support\Facades\Redirect;

class DashboardPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(Posts::where('user_id', auth()->user()->id)->get(),);    

        return view('dashboard.posts.index', [
            'posts' => Posts::where('user_id', auth()->user()->id)->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.posts.create', [
            'categories' => Categories::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $ValidatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:posts',
            'categories_id' => 'required',
            'deskripsi' => 'required',
            'datestart' => 'required',
            'dateend' => 'required'
        ]);
        $ValidatedData['user_id'] = auth()->user()->id;
        $ValidatedData['excerpt'] = Str::limit(strip_tags($request->deskripsi), 100);

        Posts::create($ValidatedData);
        return Redirect('/dashboard/posts')->with('success', 'Tugas Baru Telah Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function show(posts $post)
    {
        // dd($posts);
        // return $post;
        return view('dashboard.posts.show', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function edit(Posts $post)
    {
        return view('dashboard.posts.edit', [
            'post' => $post,
            'categories' => Categories::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Posts $post)
    {
        $rules = [
            'title' => 'required|max:255',
            // 'slug' => 'required|max:255',
            'categories_id' => 'required',
            'deskripsi' => 'required',
            'datestart' => 'required',
            'dateend' => 'required'
        ];
        if ($request->slug != $post->slug) {
            $rules['slug'] = 'required|unique:posts';
        };

        $validatedData = $request->validate($rules);
        $ValidatedData['user_id'] = auth()->user()->id;
        $ValidatedData['excerpt'] = Str::limit(strip_tags($request->deskripsi), 100);

        Posts::where('id', $post->id)->update($validatedData);
        return Redirect('/dashboard/posts')->with('nice', 'Tugas Telah Di Update Bro!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Posts $post)
    {
       
        Posts::destroy($post->id);
        return Redirect('/dashboard/posts')->with('oke', 'Tugas Selesai/Dihapus!');
    }

    // public function checkSlug(Request $request)
    // {
    //     $slug = SlugService::createSlug(Posts::class, 'slug', $request->title);
    //     // $slug = SlugService::createSlug(Posts::class, 'slug', $request->tittle);
    //     return response()->json(['slug' => $slug]);
    // }
}
