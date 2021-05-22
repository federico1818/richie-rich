@extends('layout')

@section('main')    
    <div class="row my-4">
        <div class="col">
            <h1>Create account</h1>
        </div>
    </div>
    <div class="row my-4">
        <div class="col">
            <form method="POST" action="{{ route('accounts.store') }}">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" autofocus>
                </div>
                <div class="mb-3">
                    <label for="label" class="form-label">Label</label>
                    <input type="text" class="form-control" id="label" name="label">
                </div>
                <div class="mb-3">
                    <label for="label" class="form-label">Decimals</label>
                    <input type="number" class="form-control" id="decimals" name="decimals">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection