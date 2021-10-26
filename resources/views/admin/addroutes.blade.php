@extends('adminlte::page')

@section('title', 'Add Routes')

@section('content_header')
    <h1>Add Routes</h1>
@stop

@section('content')
    <div class="alert alert-dark" role="alert">
        Fill up the below information to add routes
    </div>
        
        <hr>

    @if(\Session::has('success'))
    <div class="alert alert-success">
            <h6>{{ \Session::get('success') }}</h6>
        </div>
            
     @endif

    <form method="post" action="/submitroutes">
        {{csrf_field()}}

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Source Location </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="sourcelocation" placeholder="Eg. Kathmandu " autofocus required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Destination Location </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="destinationlocation" placeholder="EG. Pokhara" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Route Name </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="routename" pattern="[A-Za-z]{3}-[A-Za-z]{3}" placeholder="EG. KTM-PKH" required>
        </div>
        
        <!-- Button trigger modal -->
        <button type="submit" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#exampleModalLong">
        Add Route
        </button>
</form>
  
@stop