@extends('adminlte::page')

@section('title', 'Edit Bus')

@section('content_header')
    <h1>Edit Bus</h1>
@stop

@section('content')
    
@section('content')
<div class="alert alert-dark" role="alert">
    Fill up the below information to edit bus
</div>

    <hr>

@if(\Session::has('success'))
<div class="alert alert-success">
    <h6>{{ \Session::get('success') }}</h6>
</div>
    
@endif

<form action="/edit" method="POST" >

    @csrf

    <input type= "hidden" name="id" value="{{$data->id}}">

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Bus Name </label>
        <input type="text" class="form-control" value="{{$data->busname}}" name="busname"autofocus required>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Bus Number </label>
        <input type="text" class="form-control" value="{{$data->busnumber}}" name="busnumber" disabled>
    </div>
    {{-- <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Bus Type </label>
        <input type="text" class="form-control" value="{{$data->bustype}}" name="bustype">
    </div> --}}
    <div class="mb-3">  
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Bus Type</label>
            <select class="form-control" value="{{$data->bustype}}"name="bustype" >
                    <option  name="bustype" value="Super Deluxe"> Super Deluxe </option>
                    <option  name="bustype" value="Deluxe"> Deluxe </option>
                    <option  name="bustype" value="Normal"> Normal </option>
            </select>
        </div> {{-- <label for="exampleFormControlInput1" class="form-label">Bus Type </label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="bustype" value="Normal" placeholder="EG. Super Deluxe" required>
        <input type="text" class="form-control" value="{{$data->bustype}}" name="bustype" list="browsers">
            <datalist id="browsers">
                <option  name="bustype" value="Super Deluxe">
                <option  name="bustype" value="Deluxe">
                <option  name="bustype" value="Normal">
            </datalist>
    </div> --}}
    <!-- Button trigger modal -->
    <button type="submit" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#exampleModalLong">
    Update Bus
    </button>
</form>

@stop




