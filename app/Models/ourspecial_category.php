<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ourspecial_category extends Model
{
    use HasFactory;
    protected $fillable=['name','status'];

    public function children()
    {
        return $this->hasMany(our_special::class,'Ospecial_cat_id','id');
    }
}
