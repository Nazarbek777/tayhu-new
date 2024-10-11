<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class ProductCategory extends Model
{
    use HasFactory, Translatable;
    protected $translatable = ['name'];
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
