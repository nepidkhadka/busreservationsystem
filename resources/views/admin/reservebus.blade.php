@extends('adminlte::page')

@section('title', 'Reserve Bus')

@section('content_header')
    <h1>Reserve Bus</h1>
@stop

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <div class="alert alert-dark" role="alert">
        Fill up the below information to Reserve bus
    </div>

        <hr>
    
    <button type="button" id="btnseatlayout" class="btn btn-info btn-lg btn-block">Show/Hide Seat</button>
    <br>
    <div id="seatlayout" style="text-align : center;">
        <img src="{{asset('/images/seatlayout.jpg')}}" />
    </div>
    <hr>
    {{-- <img id="seatlayout" src="{" alt=""> --}}
    
    @if(\Session::has('success'))
    <div class="alert alert-success">
        <h6>{{ \Session::get('success') }}</h6>
    </div>
        
    @endif

    <form method="post" action="/submitreservation">
        {{csrf_field()}}
        
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Passenger ID :</label>
        <select class="form-control" name="pid" id="pid">
            @foreach ($pid as $pid)
                <option value="{{$pid->id}}">{{$pid->id}}</option>  
            @endforeach
            </select>
        </div>

        <input type="hidden" id="status" name="status" value="1">

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Bus ID :</label>
            <select class="form-control" name="busid" id="busid">
                @foreach ($busid as $busid)
                    <option value="{{$busid->id}}">{{$busid->id}}</option>  
                @endforeach
                </select>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Routes ID :</label>
            <select class="form-control" name="routesid" id="routesid">
                @foreach ($routesid as $routesid)
                    <option value="{{$routesid->id}}">{{$routesid->id}}</option>  
                @endforeach
                </select>
        </div>
        {{-- <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Routes ID </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="routesid"  autocomplete="off" placeholder="EG. BA21KHA8846" required>
        </div> --}}
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Date </label>
            <input type="date" class="form-control" id="exampleFormControlInput1" name="date" autocomplete="off" required>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Seat No </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="seatno" maxlength="11" pattern="[0-9 ]+" placeholder="EG. 12 or 12,13,14,15 MAX:4 Seat Available" required>
        </div>
        
        <!-- Button trigger modal -->
        <button type="submit" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#exampleModalLong" required>
        Reserve Bus
        </button>
    </form>
   





    <script>
        $(document).ready(function(){
          $("#seatlayout").hide();
        });

        $("#btnseatlayout").click(function(){
            $("#seatlayout").toggle();

        });
    </script>
@stop