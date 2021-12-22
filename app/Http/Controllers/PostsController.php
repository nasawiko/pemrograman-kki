<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Models\Report;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use illuminate\Support\Str;

class PostsController extends Controller
{
    public function home()
    {
        return view('home', [
            "tittle" => "Create || EDVAMECOM",
            "active" => "create"
        ]);
    }

    public function task()
    {

        return view('task', [
            "tittle" => "TASK || EDVAMECON",
            "active" => "task",
            "task_tittle" => "Aplikasi Penugasan",
            "posts" => posts::latest()->Filter(request(['search'], ['categories']))->get(),
            // paginate(7)->withQueryString()

        ]);
    }

    public function create()
    {
        return view('create', [
            "tittle" => "Home || EDVAMECON",
            "active" => "home"
        ]);
    }


    public function show(Posts $posts)
    {
        return view('post_task', [

            "tittle" => "Post || EDVAMECON",
            "posting" => $posts,
            "active" => "task"
        ]);
    }

    public function store(Request $request)
    {
        $ValidatedData = $request->validate([
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
}
