<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public function getSubCategories(){
        return $this->hasMany(SubCategory::class,'category_id','id');
    }
    public function posts(){
        return $this->hasMany(Post::class,'category_id','id');
    }
}
