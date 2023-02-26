<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use Uuids,SoftDeletes, HasFactory;

    protected $guarded = [];

    public function team(): ?BelongsTo
    {
        return $this->belongsTo(Team::class);
    }
    public function project(): ?BelongsTo
    {
        return $this->belongsTo(Project::class);
    }

    public function status(): ?BelongsTo
    {
        return $this->belongsTo(Status::class);
    }
}
