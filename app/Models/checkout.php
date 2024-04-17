<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class checkout extends Model
{
    use HasFactory;
    public $table="checkout";
    protected $fillable = ['name','lastname','email','address1','address2','number'];

}
