<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class coupen extends Model
{
    use HasFactory;
    protected $fillable = ['coupen_code','ammount','ammount_type','expiry_date','status'];
}
