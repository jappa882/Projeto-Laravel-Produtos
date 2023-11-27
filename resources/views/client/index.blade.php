@extends('layouts.log')

@section('body')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Client</h1>
        <a href="{{ route('client.create') }}" class="btn btn-primary">Add Client</a>
    </div>
    
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div> 
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>City</th>
                <th>Client Code</th>
                <th>address</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($client->count() > 0)
                @foreach($client as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->name }}</td>
                        <td class="align-middle">{{ $rs->city }}</td>
                        <td class="align-middle">{{ $rs->client_code }}</td>
                        <td class="align-middle">{{ $rs->address }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('client.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('client.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('client.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Client not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection