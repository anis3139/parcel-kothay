<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'users_id',
    ];


    public function brand() {
        return $this->belongsTo(Product::class, 'brand_id', 'id');
    }
}
