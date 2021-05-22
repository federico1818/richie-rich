<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'label',
        'decimals'
    ];

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function getAmountLabelAttribute()
    {
        return number_format($this->amount_value, $this->decimals, ',', '');
    }
    
    public function getAmountValueAttribute()
    {
        return $this->amount / $this->decimals;
    }
}
