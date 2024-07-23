@extends('layouts.app')

@section('title', 'Edit Client')

@section('contents')
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
<label class="form-label">Email</label>
<input type="text" name="email" class="form-control" placeholder="Email" value="{{ $client->email }}" >
</div>
</div>

            <div class="row">
                <div class="col mb-3">
                <label class="form-label">Phone</label>
                <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{ $client->phone }}" >
</div>

<div class="col mb-3">
<label class="form-label">City</label>
<input type=text class="form-control" name="city" placeholder="City" value="{{ $client->city }}">
</div>
</div>
<div class="row">
    <div class="col mb-3">
    <label class="form-label">Address</label>
    <input type="text" name="address" class="form-control" placeholder="Address" value="{{ $client->adress }}" >
</div>
</div>
<div class="row">
<div class="d-grid">
<button class="btn btn-warning">Update</button>
</div>
</div>
</form>
@endsection