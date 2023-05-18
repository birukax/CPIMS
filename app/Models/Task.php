<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'task_name',
        'task_description',
        'date',
        'starting_time',
        'ending_time'
    ];

    public function users(): BelongsToMany
    {
        return $this->BelongsToMany(User::class, Task_user::class);
    }

    public function zones(): BelongsToMany
    {
        return $this->BelongsToMany(Zone::class, Task_zone::class);
    }
}
