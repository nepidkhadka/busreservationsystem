@extends('adminlte::page')

@section('title', 'Passenger List')

@section('content_header')
    <h1>Passenger List</h1>
@stop

@section('content')
    <div class="alert alert-dark" role="alert">
        The added passenegr are listed below
    </div>

    @if(\Session::has('success'))
    <div class="alert alert-success">
        <h6>{{ \Session::get('success') }}</h6>
    </div>
        
    @endif

    <hr>

    <table class="table table-bordered table-striped">
            <thead class="table-dark">
              <tr>
                <th scope="col">Passenger ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Address</th>
                <th scope="col">City</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Email</th>
              </tr>
            </thead>

            @foreach($pdata as $pdata)

            <tbody>
              <tr>  
                <td>{{$pdata->id}}</td>         
                <td>{{$pdata->firstname}}</td>         
                <td>{{$pdata->lastname}}</td>         
                <td>{{$pdata->address}}</td>
                <td>{{$pdata->city}}</td>
                <td>{{$pdata->phonenumber}}</td>
                <td>{{$pdata->email}}</td>
              </tr>             
            </tbody>
            @endforeach
    </table>
  
  
@stop