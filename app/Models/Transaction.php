<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'user_id',
        'billing_id',
        'amount',
        'points',
        'status',
        'payment_method',
        'payment_url',
        'paid_at'
    ];

    protected $casts = [
        'paid_at' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Retorna o valor em reais
    public function getAmountInReais()
    {
        return $this->amount / 100;
    }
}
