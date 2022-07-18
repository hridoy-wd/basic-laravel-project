<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blogg extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function category(){
        return $this->belongsTo(CategoryBlog::class,'blog_category_id','id');
    }
}
