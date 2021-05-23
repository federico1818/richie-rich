<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Credit extends Transaction
{
    use HasFactory;

    protected $table = 'transactions';
}
