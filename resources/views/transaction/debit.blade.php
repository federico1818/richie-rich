@extends('layout')

@section('main')
    <div class="row my-4">
        <div class="col">
            <h1>Debit</h1>
        </div>
    </div>
    <div class="row my-4">
        <div class="col">
            <form method="POST" action="{{ route('debit.store', $account) }}">
                @csrf
                <div class="mb-3">
                    <label for="date" class="form-label">Date</label>
                    <input type="date" class="form-control" id="date" name="date">
                </div>
                <div class="mb-3">
                    <label for="amount" class="form-label">Amount</label>
                    <input type="number" class="form-control" id="amount" name="amount">
                </div>
                <div class="mb-3">
                    <label for="reason_id" class="form-label">Reason</label>
                    <input type="number" class="form-control" id="reason_id" name="reason_id">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection