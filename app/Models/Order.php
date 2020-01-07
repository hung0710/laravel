<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models;
class Order extends Model
{
    protected $table = 'orders';
    public $timestamps = false;
    protected $dateFormat = 'U';
    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';
    protected $fillable = [
        'user_id', 
        'total_price', 
        'description',
    ];
    public function User()
    {
        return $this->belongsToMany(User::class);
    }
    public function OrderDetail()
    {
        return $this->hasMany(User::class);
    }
}