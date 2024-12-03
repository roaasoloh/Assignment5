<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable; // Use the User class for authentication
use Illuminate\Notifications\Notifiable;
class Student extends Authenticatable
{
    use Notifiable;
    //
    protected $fillable = ['name','age',"is_graduate"];

}
