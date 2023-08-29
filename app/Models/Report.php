<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    function user()
    {
        return $this->belongsTo(User::class);
    }

    function service()
    {
        return $this->belongsTo(Service::class);
    }

    function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    function order_details()
    {
        return $this->hasMany(OrderDetail::class);
    }
}
