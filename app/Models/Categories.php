<?php

namespace App\Models;

use App\Models\Posts;
use App\Models\Report;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function posts()
    {
        return $this->hasMany(Posts::class);
    }

    public function report()
    {
        return $this->hasMany(Report::class);
    }
    // public static function boot() {
    //     parent::boot();

    //     static::deleting(function($category) { // before delete() method call this
    //          $category->posts()->delete();
    //          // do the rest of the cleanup...
    //     });
    // }
     public function getRouteKeyName()
    {
         return 'slug'; 
     }
}
