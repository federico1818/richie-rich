@extends('layout')

@section('main')
    <div class="row my-4">
        <div class="col">
            <a class="btn btn-outline-primary" href="{{ route('transactions.create', $account) }}">Ingreso</a>
            <a class="btn btn-outline-primary" href="{{ route('transactions.create', $account) }}">Egreso</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            Column
        </div>
        <div class="col">
            Column
        </div>
        <div class="col">
            Column
        </div>
    </div>
@endsection