<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class our_special extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable=['Ospecial_cat_id','content','image','special','status'];
    public function category()
    {
        return $this->belongsTo(ourspecial_category::class,'Ospecial_cat_id','id');
    }
}
