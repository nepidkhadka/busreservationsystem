@extends('adminlte::page')

@section('title', 'Bus List')

@section('content_header')
    <h1>Bus List</h1>
@stop

@section('content')
    <div class="alert alert-dark" role="alert">
        The recorded bus are listed below
    </div>

    <hr>

    <table class="table table-bordered table-striped">
            <thead class="table-dark">
              <tr>
                <th scope="col">Bus ID</th>
                <th scope="col">Bus Name</th>
                <th scope="col">Bus Number</th>
                <th scope="col">Bus Type</th>
              </tr>
            </thead>

            @foreach($listbus as $listbus)

            <tbody>
              <tr>  
                <td>{{$listbus->id}}</td>         
                <td>{{$listbus->busname}}</td>
                <td>{{$listbus->busnumber}}</td>
                <td>{{$listbus->bustype}}</td>
              </tr>             
            </tbody>
            @endforeach
    </table>
  
  
@stop