<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Car extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function depositValue(): HasOne
    {
        return $this->hasOne(DepositValue::class);
    }

    public function reservationPrice(): HasOne
    {
        return $this->hasOne(ReservationPrice::class);
    }

    public function discount(): HasOne
    {
        return $this->hasOne(Discount::class);
    }

    public function reservations(): HasMany
    {
        return $this->hasMany(Reservation::class);
    }

    public function extraFeatures(): HasMany
    {
        return $this->hasMany(ExtraFeature::class);
    }
}
