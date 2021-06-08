<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * Get the category that owns the products.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function marketer()
    {
        return $this->belongsTo(Marketer::class);
    }
}
