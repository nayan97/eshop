<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product_cat extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function Products()
    {
        return $this -> belongsToMany(Product::class);
    }
}
