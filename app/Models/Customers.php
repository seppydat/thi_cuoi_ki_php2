<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'profile_img',
        'full_name',
        'phone_number',
        'email',
        'created_at',
        'updated_at'
    ];
}
