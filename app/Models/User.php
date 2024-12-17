<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'farm_name',
        'livestock_type',
        'farm_scale',
        'location',
        'phone',
        'employee_count',
        'join_date',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
