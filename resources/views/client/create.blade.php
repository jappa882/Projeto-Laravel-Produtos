@extends('layouts.log')
 
@section('body')
    <h1 class="mb-0">Add Book</h1>
    <hr />
    <form action="{{ route('client.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
            <div class="col">
                <input type="text" name="city" class="form-control" placeholder="City">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="client_code" class="form-control" placeholder="Client Code">
            </div>
            <div class="col">
                <textarea class="form-control" name="address" placeholder="address"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection