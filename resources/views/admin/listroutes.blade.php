@extends('adminlte::page')

@section('title', 'Routes List')

@section('content_header')
    <h1>Routes List</h1>
@stop

@section('content')

  <div class="alert alert-dark" role="alert">
        The recorded routes are listed below
    </div>

    <hr>

    <table class="table table-bordered table-striped">
            <thead class="table-dark">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Source Location</th>
                <th scope="col">Destination Location</th>
                <th scope="col">Route Name</th>
              </tr>
            </thead>

            @foreach($listroutes as $listroutes)

            <tbody>
              <tr>           
                <td>{{$listroutes->id}}</td>
                <td>{{$listroutes->sourcelocation}}</td>
                <td>{{$listroutes->destinationlocation}}</td>
                <td>{{$listroutes->routename}}</td>
              </tr>             
            </tbody>
            @endforeach
    </table>
  
  
@stop