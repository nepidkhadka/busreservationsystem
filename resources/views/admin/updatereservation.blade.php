@extends('adminlte::page')

@section('title', 'Update Reservation')

@section('content_header')
    <h1>Update Reservation</h1>
@stop

@section('content')
    <div class="alert alert-dark" role="alert">
        The available reservation to update are listed below
    </div>

    <hr>
    
    @if(\Session::has('success'))
    <div class="alert alert-success">
        <h6>{{ \Session::get('success') }}</h6>
    </div>
        
    @endif

    @if(\Session::has('danger'))
    <div class="alert alert-danger">
        <h6>{{ \Session::get('danger') }}</h6>
    </div>
        
    @endif

    <table class="table table-bordered table-striped">
            <thead class="table-dark">
              <tr>
                <th scope="col">Reservation ID</th>
                <th scope="col">Passenger ID</th>
                <th scope="col">Bus ID</th>
                <th scope="col">Routes ID</th>
                <th scope="col">Date</th>
                <th scope="col">Seat No</th>
                <th scope="col">Edit</th>
                <th scope="col">Cancel</th>
              </tr>
            </thead>

            @foreach($updatereservation as $updater)

            <tbody>
              <tr>     
                <td>{{$updater->id}}</td>               
                <td>{{$updater->passengerid}}</td>
                <td>{{$updater->busid}}</td>
                <td>{{$updater->routesid}}</td>
                <td>{{$updater->date}}</td>
                <td>{{$updater->seatno}}</td>
                <td>

                    <a class="btn btn-outline-warning btn-sm" href={{"editreservation/".$updater['id']}}>Edit</a>

                </td>

                <td> 
                    <a class="btn btn-outline-danger btn-sm" href={{"deletereservation/".$updater['id']}}> Cancel </a> 
                </td>
            </tr>             
            </tbody>
            @endforeach
    </table>
  
  
@stop