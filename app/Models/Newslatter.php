<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newslatter extends Model
{
    use HasFactory;

    public function getPost(){
        return $this->hasOne(Post::class,'id','data_value');
    }
}
