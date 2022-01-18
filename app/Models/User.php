<?php

namespace App\Models;

use App\Models\Order;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $guarded = [];

    public function order()
    {
        return $this->hasMany(Order::class, 'user_id', 'id');
    }
}

// user (parent)  ||  order (child)
