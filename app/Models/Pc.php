<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pc extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand',
        'serial_number',
        'owner_name',
        'owner_id',
        'approved_by'
];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'approved_by');
    }
}
