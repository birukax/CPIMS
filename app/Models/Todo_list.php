<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Todo_list extends Model
{
    use HasFactory;

    protected $fillable = [
        'task_name',
        'task_description',
        'date',
        'starting_time',
        'ending_time',
        'status'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
