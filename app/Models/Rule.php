<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Rule extends Model
{
    use HasFactory;

    protected $fillable = [
        'rule', 'role_id'
    ];

    public function role(): BelongsTo
    {
        return $this->BelongsTo(Role::class);
    }
}
