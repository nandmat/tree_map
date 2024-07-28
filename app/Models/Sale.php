<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = [
        'car_id',
        'quantity'
    ];

    protected $dates = [
        'created_at',
        'udpated_at'
    ];

    public function car(): BelongsTo
    {
        return $this->belongsTo(Car::class);
    }
}
