<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount',
        'reason_id'
    ];

    public function account()
    {
        return $this->belongsTo(Account::class);
    }

    public function getAmountValueAttribute()
    {
        return $this->amount / $this->account->multiplier;
    }

    public function getAmountLabelAttribute()
    {
        return number_format($this->amount_value, $this->account->decimals, ',', '');
    }

}
