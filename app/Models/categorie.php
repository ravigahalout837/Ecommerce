<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categorie extends Model
{
    use HasFactory;
    public function categories()
    {
        return $this->hasMany('App\Categorie','parent_id');
    }
}
