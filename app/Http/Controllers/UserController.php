<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return view('dashboard.user.index', [
            'users' => User::get()
        ]);
    }
    public function author(User $author)
    {
        return view('task', [
            'tittle' => "Edvamecon || By. $author->name",
            'posts' => $author->posts->load('categories', 'user'),
            "active" => "task",
            "task_tittle" => "Write By. $author->name"
        ]);
    }
}
