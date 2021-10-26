@extends('adminlte::page')

@section('title', 'Edit Driver')

@section('content_header')
    <h1>Edit Driver</h1>
@stop

@section('content')
    
@section('content')
<div class="alert alert-dark" role="alert">
    Fill up the below information to edit drivers
</div>

    <hr>

@if(\Session::has('success'))
<div class="alert alert-success">
    <h6>{{ \Session::get('success') }}</h6>
</div>
    
@endif

<form action="/editdriverform" method="POST" >

    @csrf

    <input type= "hidden" name="id" value="{{$data->id}}">

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Driver Name </label>
        <input type="text" value="{{$data->name}}" class="form-control" id="exampleFormControlInput1" name="name" placeholder="Eg. Ram Khadka"  autofocus required disabled>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">License Number </label>
        <input type="text" value="{{$data->licenseno}}" class="form-control" id="exampleFormControlInput1" name="licenseno" pattern="[0-9]{2}-[0-9]{2}-[0-9]{6}" placeholder="EG. 08-08-00442078 " required disabled>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Phone Number </label>
        <input type="text" value="{{$data->phonenumber}}" class="form-control" id="exampleFormControlInput1" name="phonenumber" pattern="[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}[0-9]{1}" placeholder="EG. 9808465246" required>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Address </label>
        <input type="text" value="{{$data->address}}" class="form-control" id="exampleFormControlInput1" name="address" placeholder="EG. Kathmandu" required>
    </div>
    
    <!-- Button trigger modal -->
    <button type="submit" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#exampleModalLong">
    Update Driver
    </button>
</form>

@stop




