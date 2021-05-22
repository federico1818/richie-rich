@extends('layout')

@section('main')
    <div class="row my-4">
        <div class="col">
            <a class="btn btn-outline-primary" href="{{ route('accounts.create') }}">Crear</a>
        </div>
    </div>
    <div class="row my-4">
        @foreach ($accounts as $account)
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $account->label }}</h5>
                        <p class="card-text">$ {{ $account->amount_label }}</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="{{ route('transactions.index', $account ) }}" class="card-link">Transactions</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection