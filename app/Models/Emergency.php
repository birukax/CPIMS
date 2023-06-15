<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emergency extends Model
{
    protected $fillable = [
        'emergency_name', 'emergency_contact_name', 'emergency_contact_phone', 'emergency_alternative_name', 'emergency_alternative_phone'
    ];
    use HasFactory;
}
