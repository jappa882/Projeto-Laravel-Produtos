@extends('layouts.log')
 
@section('body')
    <h1 class="mb-0">Detail Client</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $client->name }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">City</label>
            <input type="text" name="city" class="form-control" placeholder="City" value="{{ $client->city }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">client_code</label>
            <input type="text" name="client_code" class="form-control" placeholder="Client Code" value="{{ $client->client_code }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Address</label>
            <textarea class="form-control" name="address" placeholder="Address" readonly>{{ $client->address }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $client->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $client->updated_at }}" readonly>
        </div>
    </div>
@endsection