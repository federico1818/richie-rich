<?php

namespace App\Processes;

use App\Models\Account;
use App\Models\Transaction;

class StoreTransaction
{
    public function __invoke(Account $account, Transaction $transaction)
    {
        $account->transactions()->save($transaction);
        
        $account->amount += $transaction->amount;
    
        $account->save();
        
        return $transaction;
    }
    
}