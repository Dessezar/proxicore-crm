<?php

namespace App\Models;

use App\Enums\CustomerType;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'type',
    ];

    protected $casts = [
        'type' => CustomerType::class,
    ];

    public function scopeOfType(Builder $query, CustomerType $type): Builder
    {
        return $query->where('type', $type->value);
    }
}
