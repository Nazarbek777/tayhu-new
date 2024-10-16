<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class ProductModel extends Model
{
    use Translatable;

    protected $translatable = ['name'];

    public function products()
    {
        return $this->hasMany(Product::class, 'model_id');
    }
}
