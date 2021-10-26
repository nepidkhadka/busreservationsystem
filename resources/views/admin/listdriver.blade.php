@extends('adminlte::page')

@section('title', 'Driver List')

@section('content_header')
    <h1>Driver List</h1>
@stop

@section('content')
    <div class="alert alert-dark" role="alert">
        The registered driver are listed below
    </div>

    <hr>

    <table class="table table-bordered table-striped">
            <thead class="table-dark">
              <tr>
                <th scope="col">Driver ID</th>
                <th scope="col">Driver Name</th>
                <th scope="col">License Number</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Address</th>
              </tr>
            </thead>

            @foreach($listdriver as $listdriver)

            <tbody>
              <tr>  
                <td>{{$listdriver->id}}</td>         
                <td>{{$listdriver->name}}</td>         
                <td>{{$listdriver->licenseno}}</td>
                <td>{{$listdriver->phonenumber}}</td>
                <td>{{$listdriver->address}}</td>
              </tr>             
            </tbody>
            @endforeach
    </table>
  
  
@stop