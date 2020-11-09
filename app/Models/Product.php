<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [
        'id', 'created_at', 'updated_at'
    ];

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}