<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'category_id',
        'sub_category',
        'sub_category_id',
        'title',
        'slug',
        'keywords',
        'thumbnail',
        'meta_description',
        'description',
        'visibility',
        'created_at',
        'updated_at',
    ];
    use HasFactory;
    public function getCategory()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    public function getSubCategory()
    {
        return $this->hasOne(SubCategory::class, 'id', 'sub_category_id');
    }
}
