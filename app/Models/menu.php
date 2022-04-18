<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class menu extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable=['menu_cat_id','fname', 'des','price','image', 'status'];
    public function category()
    {
        return $this->belongsTo(menu_catagory::class,'menu_cat_id','id');
    }
}
