<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class bh_users extends Authenticatable
{
    use HasFactory,Notifiable;

    protected $table='bh_users';

    protected $fillable = [
        'userName', 'email', 'password','idAuth',
    ];
}
