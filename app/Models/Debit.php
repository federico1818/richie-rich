<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Debit extends Transaction
{
    use HasFactory;

    protected $table = 'transactions';
    
}
