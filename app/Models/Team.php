<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Team extends Model
{
    use Uuids,SoftDeletes, HasFactory;

    protected $guarded = [];

    public function users(): ?HasMany
    {
        return $this->hasMany(User::class);
    }

    public function role(): ?BelongsTo
    {
        return $this->belongsTo(Role::class);
    }

    public function tasks(): ?HasMany
    {
        return $this->hasMany(Task::class);
    }
}
