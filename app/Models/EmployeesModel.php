<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class EmployeesModel extends Model
{
    use HasFactory,Notifiable;
    protected $fillable=[
        'firstname','lastname','gender','email','password','mobile','address'
    ];

    protected $table='addemployee';
}
