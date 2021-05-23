@extends('layout')

@section('main')
    <div class="row my-4">
        <div class="col">
            <a class="btn btn-outline-primary" href="{{ route('credit', $account) }}">Credit</a>
            <a class="btn btn-outline-primary" href="{{ route('debit.create', $account) }}">Debit</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Reason</th>
                        <th scope="col">Value</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($account->transactions as $transaction)
                        <tr>
                            <td>{{ $transaction->reason_id }}</td>
                            <td>{{ $transaction->amount_label }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection