<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Color extends Model
{
    use SoftDeletes;
    protected $table = 'colors';

    protected $fillable = [
        'name'
    ];

    public function productDetail()
    {
        return $this->hasMany(ProductDetail::class);
    }
}
