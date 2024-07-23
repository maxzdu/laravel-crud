@extends('layouts.app')
  
@section('title', 'Home Product')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Clients</h1>
        <a href="/New Client" class="btn btn-primary">Add CLient</a>
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
                <th>Email</th>
                <th>Phone</th>
                <th>city</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>+
            @if($clients->count() > 0)
                @foreach($clients as $clients)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $clients->name }}</td>
                        <td class="align-middle">{{ $clients->email }}</td>
                        <td class="align-middle">{{ $clients->phone }}</td>
                        <td class="align-middle">{{ $clients->city}}</td>  
                        <td class="align-middle">{{ $clients->adress}}</td>  
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('client.show', $clients->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('client.edit', $clients->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('client.destroy', $clients->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
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
                    <td class="text-center" colspan="5">clients not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection