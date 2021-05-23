<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Processes\StoreDebit;
use App\Http\Requests\DebitRequest;

class DebitController extends Controller
{
    public function create(Account $account)
    {
        return view('transaction.debit', compact('account'));
    }
    
    public function store(Account $account, DebitRequest $request)
    {
        (new StoreDebit)($account, $request->attributes());

        return redirect()->route('transactions.index', $account);
    }
}
