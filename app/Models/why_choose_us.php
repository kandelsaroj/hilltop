<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class why_choose_us extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['h1','content', 'img','status'];
}
