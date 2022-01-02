<?php

namespace App\Models;

use App\Models\User;
use App\Models\Report;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\Tests\Models\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Posts extends Model
{
    use HasFactory;
    // use Sluggable;
    protected $guarded = ['id'];
    protected $with = ['user', 'categories'];

    public function scopeFilter($query, array $filters)
    {
        // if (isset($Fillters['search']) ? $Fillters['search'] : false) {
        //     $query->where('tittle', 'like', '%' . $Fillters['search'] . '%')
        //         ->orWhere('deskripsi', 'like', '%' . $Fillters['search'] . '%');
        // }
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where(function ($query) use ($search) {
                $query->where('tittle', 'like', '%' . $search . '%')
                    ->orWhere('deskripsi', 'like', '%' . $search . '%');
            });
        });
        $query->when($filters['categories'] ?? false, function ($query, $categories) {
            return $query->whereHas('categories', function ($query) use ($categories) {
                $query->where('slug', $categories);
            });
        });

        // $query->when(
        //     $filters['author'] ?? false,
        //     fn ($query, $author) =>
        //     $query->whereHas(
        //         'user',
        //         fn ($query) =>
        //         $query->where('username', $author)
        //     )
        // );
    }


    public function categories()
    {
        return $this->belongsTo(Categories::class);
    }

    public function report()
    {
        return $this->belongsTo(Reports::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
    // public function sluggable(): array
    // {
    //     return [
    //         'slug' => [
    //             'source' => 'title'
    //         ]
    //     ];
    // }
}
