<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permissino extends Model
{
    use HasFactory;

    protected $guarded = [];

    function roles()
    {
        return $this->belongsToMany(Role::class, 'role_permissino');
    }
}
