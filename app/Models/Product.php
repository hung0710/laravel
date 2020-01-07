<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models;
class Product extends Model
{
    protected $table = 'products';
    public $timestamps = false;
    protected $dateFormat = 'U';
    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';
    protected $fillable = [
        'category_id', 
        'product_name', 
        'price',
        'image',
        'quantity',
        'avg_rating',
    ];
    public function OrderDetail()
    {
        return $this->hasMany(OrderDetail::class);
    }
}