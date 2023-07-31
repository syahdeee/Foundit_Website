<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Barang extends Model
{
    use HasFactory;
    use Sluggable;

    protected $guarded = ["id"];

    public function scopeFilter($query, array $filters){
        

        $query->when($filters['search']?? false, function($query, $search){
            return $query->where('nama', 'like','%'.$search.'%');
        });

        $query->when($filters['category']??false, function($query, $category){
            return $query->whereHas('category', function($query) use ($category){
                $query->where('slug', $category);
            });
        });

    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function users(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function sluggable():array{
        return [
            'slug' => [
                'source' => 'nama'
            ]
        ];
    }
}
