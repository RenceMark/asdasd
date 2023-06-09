<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consumers extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'age',
        'email', 
        'address',
        'contactNumber'
    ];
}
