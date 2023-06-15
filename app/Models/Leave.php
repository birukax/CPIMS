<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Leave extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'lt_id',
        'reason',
        'status_id',
        'start_date',
        'end_date',
        'leave_days',
        'evidence',
        'evidence_path',
        'co_decision',
        'admin_decision'
    ];

    public function user(): BelongsTo
    {
        return $this->BelongsTo(User::class);
    }

    public function lt(): BelongsTo
    {
        return $this->BelongsTo(Lt::class);
    }

    public function status(): BelongsTo
    {
        return $this->BelongsTo(Status::class);
    }
}
