<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models;
class User extends Model
{   
    protected $table = 'users';
    public $timestamps = false;
    protected $dateFormat = 'U';
    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';
    protected $fillable = [
        'name', 
        'email', 
        'password',
        'phone',
        'address',
    ];
    protected $hidden = [
        'password',
        
    ];
    public function Orders()
    {
        return $this->hasMany(Order::class);
    }
}