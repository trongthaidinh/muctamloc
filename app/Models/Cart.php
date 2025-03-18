<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [             // khai báo các trường trong bảng ở database vào Model
        'customer_id',
        'product_id',
        'qty',
        'price',


    ];

    public function product()
    {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }

    public function images()
    {
        return $this->product->imgPro();
    }
}
