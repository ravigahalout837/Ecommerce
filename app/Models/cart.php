<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\product;

class cart extends Model
{
    use HasFactory;
   public $table="cart";

    public function GetProductData(){

       return  $this->hasOne(product::class, 'id', 'product_id');
    }
}
