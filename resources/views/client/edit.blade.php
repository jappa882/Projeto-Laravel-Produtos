@extends('layouts.log')
 
@section('body')
    <h1 class="mb-0">Edit Client</h1>
    <hr />
    <form action="{{ route('client.update', $client->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $client->name }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">City</label>
                <input type="text" name="city" class="form-control" placeholder="City" value="{{ $client->city }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Client Code</label>
                <input type="text" name="client_code" class="form-control" placeholder="Client Code" value="{{ $client->client_code }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Address</label>
                <textarea class="form-control" name="address" placeholder="Address" >{{ $client->address }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection