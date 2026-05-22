<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['collection_id', 'name', 'description', 'price', 'material', 'dimensions', 'image_path'];

    public function collection()
    {
        return $this->belongsTo(Collection::class);
    }
}
