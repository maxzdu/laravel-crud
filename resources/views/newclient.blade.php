@extends('layouts.app')
  
@section('title', 'Create Client')
  
@section('contents')
    <h1 class="mb-0">Add Client</h1>
    <hr />
    <form action="{{ route('client.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
            <div class="col">
                <input type="text" name="email" class="form-control" placeholder="Email">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="phone" class="form-control" placeholder="Phone">
            </div>
            <div class="col">
                <input type="text" name="city" class="form-control" placeholder="City">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="adress" class="form-control" placeholder="Address">
            </div>
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection