<?php

namespace App\Processes;

use App\Models\Account;
use App\Models\Debit;

class StoreDebit
{
    public function __invoke(Account $account, Array $attributes)
    {
        $debit = new Debit([
            'amount' => -1 * abs($attributes['amount']) * $account->multiplier,
            'reason_id' => $attributes['reason_id']
        ]);

        (new StoreTransaction)($account, $debit);

        return $debit;
    }
}
