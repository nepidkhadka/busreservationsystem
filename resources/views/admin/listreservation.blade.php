@extends('adminlte::page')

@section('title', 'Reservation List')

@section('content_header')
    <h1>Reservation List</h1>
@stop

@section('content')

  <div class="alert alert-dark" role="alert">
        The recorded reservation are listed below
    </div>

    <hr>

    <table class="table table-bordered table-striped">
            <thead class="table-dark">
              <tr>
                <th scope="col">Reservation ID</th>
                <th scope="col">Passenger ID</th>
                <th scope="col">Bus ID</th>
                <th scope="col">Routes ID</th>
                <th scope="col">Date</th>
                <th scope="col">Seat No</th>
              </tr>
            </thead>

            @foreach($reservationdata as $rdata)

            <tbody>
              <tr>           
                <td>{{$rdata->id}}</td>
                <td>{{$rdata->passenger->firstname}}</td>
                <td>{{$rdata->busid}}</td>
                <td>{{$rdata->id}}</td>
                <td>{{$rdata->date}}</td>
                <td>{{$rdata->seatno}}</td>
              </tr>             
            </tbody>
            @endforeach
    </table>
  
  
@stop