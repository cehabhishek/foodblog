<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'image',
        'short_description',
        'show_in_menu',
        'created_at',
        'updated_at'
    ];
    public function post()
    {
        return $this->hasMany(Post::class, 'sub_category', 'name');
    }
    public function category(){
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
}
