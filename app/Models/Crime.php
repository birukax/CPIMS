<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Crime extends Model
{
    use HasFactory;

    protected $filable = [
        'crime',
        'description',
        'offender_name',
        'offender_id',
        'offender_phone_number',
        'offender_statement',
        'victim_name',
        'victim_id',
        'victim_phone_number',
        'victim_statement',
        'co_decision',
        'dc_decision',
        'reported_by',
        'reviewed_by_co',
        'reviewed_by_dc'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'reported_by');
    }
}
