<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\hasMany;

class Role extends Model
{
    use HasFactory;

    public function users(): hasMany
    {
        return $this->hasMany(User::class,);
    }
}
