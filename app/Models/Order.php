<?php

namespace App\Models;

use App\Models\User;
use App\Models\OrderDetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $guarded=[];
    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id'); // (className, foreign_key, local_key)
    }

    public function details()
    {
        return $this->hasMany(OrderDetail::class, 'order_id', 'id');
    }
}
// php artisan make:model Order -m (model + migration)
