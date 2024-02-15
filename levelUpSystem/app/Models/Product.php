<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'description',
        'image',
        'price',
        'quantity'
    ];

    public function sales()
    {
        return $this->belongsToMany(Sale::class)->withPivot(['quantity', 'created_at', 'updated_at']);
    }
}
