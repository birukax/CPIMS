<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Status extends Model
{
    use HasFactory;

    public function crimes(): HasMany
    {
        return $this->hasMany(Crime::class);
    }

    public function leaves(): HasMany
    {
        return $this->HasMany(Leave::class);
    }
}
