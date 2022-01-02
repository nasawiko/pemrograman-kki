<?php

namespace App\Models;

use App\Models\User;
use App\Models\Posts;
use App\Models\Categories;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reports extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $with = ['user', 'categories'];
    public function categories()
    {
        return $this->belongsTo(Categories::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function posts()
    {
        return $this->belongsTo(Posts::class);
    }
}
