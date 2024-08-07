<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class staff extends Model
{
    use HasFactory;
    protected $table = 'staff';
    protected $fillable = [
        'staff_id',
        'name',
        'email',
        'phone_number',
        'address',
        'role',
        'password',
    ];
}
