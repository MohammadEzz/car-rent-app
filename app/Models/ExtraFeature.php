<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ExtraFeature extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;

    public function car(): BelongsTo
    {
        return $this->belongsTo(Car::class);
    }
}
