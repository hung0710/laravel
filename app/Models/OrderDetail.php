<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models;
class OrderDetail extends Model
{
    protected $table = 'order_detail';
    public $timestamps = false;
    protected $dateFormat = 'U';
    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';
    protected $fillable = [
        'order_id', 
        'product_id', 
        'quantity',
        'price',
    ];
    public function Order()
    {
        return $this->belongsToMany(Order::class);
    }
    public function Product()
    {
        return $this->belongsToMany(Product::class);
    }
}