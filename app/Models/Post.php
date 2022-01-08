<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'body',
        'category_id',
        'user_id'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    //relacion uno a muchos inversa Users
    public function user(){
        return $this->belongsTo(User::class);
    }

    //relacion uno a muchos inversa Categories
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
