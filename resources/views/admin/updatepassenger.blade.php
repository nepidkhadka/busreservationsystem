@extends('adminlte::page')

@section('title', 'Update Passenger')

@section('content_header')
    <h1>Update Passenger</h1>
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
                <th scope="col">Delete</th>
                <th scope="col">Reservation Status</th>
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
                <td> 
                  <a class="btn btn-outline-danger btn-sm" href={{"deletepassenger/".$pdata['id']}}> Delete </a> 
              </td>
                <td>
                  <?php if($pdata->status == '1'){ ?>
                  <a href="{{url('/passengerstatus',$pdata->id)}}" class="btn btn-info btn-sm">Reserved</a>
                  
                  <?php }else { ?>
                    <a href="{{url('/passengerstatus',$pdata->id)}}" class="btn btn-warning btn-sm">Not Reserved</a>
                  <?php } ?>
              </td>
              </tr>             
            </tbody>
            @endforeach
    </table>
  
  
@stop