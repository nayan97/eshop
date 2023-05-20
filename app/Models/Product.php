<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    Protected $guarded =[];
    public function ProductCats()
    {
        return $this -> belongsToMany(Product_cat::class);
    }
}
