<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    protected $fillable = ['name', 'designer', 'description', 'image_path', 'slug'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
