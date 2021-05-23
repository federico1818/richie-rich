<?php

namespace App\Processes;

use App\Models\Account;
use App\Models\Credit;

class StoreCredit
{
    public function __invoke(Account $account, Array $attributes)
    {
        $credit = new Credit([
            'amount' => abs($attributes['amount']) * $account->multiplier,
            'reason_id' => $attributes['reason_id']
        ]);

        (new StoreTransaction)($account, $credit);

        return $credit;
    }
}