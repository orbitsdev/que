<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        'address',
        'is_active',
        'prefix',
        'number_length',
        'auto_reset_enabled',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'auto_reset_enabled' => 'boolean',
    ];

    public function counters()
    {
        return $this->hasMany(Counter::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
