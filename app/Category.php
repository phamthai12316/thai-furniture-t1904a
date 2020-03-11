<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected  $table = 'category';
    protected  $fillable = ['category_name']; // bỏ qua trường id và tg
}
