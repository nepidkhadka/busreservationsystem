@extends('adminlte::page')

@section('title', 'Add Bus')

@section('content_header')
    <h1>Add Bus</h1>
@stop

@section('content')
    <div class="alert alert-dark" role="alert">
        Fill up the below information to add bus
    </div>

        <hr>
    
    @if(\Session::has('success'))
    <div class="alert alert-success">
        <h6>{{ \Session::get('success') }}</h6>
    </div>
        
    @endif

    <form method="post" action="/submitbus">
        {{csrf_field()}}

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Bus Name </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="busname" placeholder="Eg. Sai Baba " pattern="[a-zA-Z\s]+" autofocus required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Bus Number </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="busnumber" pattern="[A-Za-z]{2}[0-9]{2}[A-Za-z]{3}[0-9]{4}" autocomplete="off" placeholder="EG. BA21KHA8846" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Bus Type</label>
            <select class="form-control" name="bustype" >
                    <option  name="bustype" value="Super Deluxe"> Super Deluxe </option>
                    <option  name="bustype" value="Deluxe"> Deluxe </option>
                    <option  name="bustype" value="Normal"> Normal </option>
            </select>
        </div>
        {{-- <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Bus Type </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="bustype" value="Normal" placeholder="EG. Super Deluxe" required>
            <input type="text" class="form-control" pattern="[a-zA-Z\s]+" name="bustype" list="browsers" autocomplete="off">
                <datalist id="browsers">
                    <option  name="bustype" value="Super Deluxe">
                    <option  name="bustype" value="Deluxe">
                    <option  name="bustype" value="Normal">
                </datalist>
        </div> --}}
        
        <!-- Button trigger modal -->
        <button type="submit" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#exampleModalLong" required>
        Add Bus
        </button>
    </form>
  
@stop