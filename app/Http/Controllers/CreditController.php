<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Processes\StoreCredit;
use App\Http\Requests\CreditRequest;
use Illuminate\Http\Request;

class CreditController extends Controller
{
    public function create(Account $account)
    {
        return view('transaction.credit', compact('account'));
    }
    
    public function store(Account $account, CreditRequest $request)
    {
        (new StoreCredit)($account, $request->attributes());

        return redirect()->route('transactions.index', $account);
    }
}
