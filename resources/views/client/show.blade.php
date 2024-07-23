@extends('layouts.app')
  
@section('title', 'Show Client')
  
@section('contents')
    <h1 class="mb-0">Detail Client</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" placeholder="name" value="{{ $client->name }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Email</label>
            <input type="text" name="email" class="form-control" placeholder="email" value="{{ $client->email }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Phone</label>
            <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{ $client->phone }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">City</label>
            <input type="form-control" name="city" class="form-control" placeholder="City" value="{{ $client->city }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Address</label>
            <input type="form-control" name="address" class="form-control" placeholder="address" value="{{ $client->adress }}" readonly>
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