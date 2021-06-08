<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fair extends Model
{
    use HasFactory;

    public function user()
	{
		return $this->belongsTo(User::class);
	}

	/**
     * Get the marketers for the fair.
     */
    public function marketers()
    {
        return $this->hasMany(Marketer::class);
    }
}
