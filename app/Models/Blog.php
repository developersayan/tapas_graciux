<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table = "blog";

    // public function category_details()
    // {
    //     return $this->hasOne('App\Models\Category','id','category_id');
    // }
}
