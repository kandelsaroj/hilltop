<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class slider extends Model
{
    use HasFactory;

    use SoftDeletes;
    protected $fillable = ['h1','h2','','para','btn_text1','btn_text2','btn_link1','btn_link2','img_link','status'];
}

