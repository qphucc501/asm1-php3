<?php

namespace App\Models;

use App\Http\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class User extends Authenticate
{
    use HasFactory,Notifiable;
    protected $fillable = [
        'name',
        'email',
        'password'
    ];
    protected  $hidden  =[
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at'=>'datetime',
    ];

}
