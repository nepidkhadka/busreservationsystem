@extends('adminlte::page')

@section('title', 'Update Bus')

@section('content_header')
    <h1>Update Bus</h1>
@stop

@section('content')
    <div class="alert alert-dark" role="alert">
        The available bus to update are listed below
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
                <th scope="col">Bus ID</th>
                <th scope="col">Bus Name</th>
                <th scope="col">Bus Number</th>
                <th scope="col">Bus Type</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
                <th scope="col">Status</th>
              </tr>
            </thead>

            @foreach($updatebus as $updatebus)

            <tbody>
              <tr>     
                <td>{{$updatebus->id}}</td>               
                <td>{{$updatebus->busname}}</td>
                <td>{{$updatebus->busnumber}}</td>
                <td>{{$updatebus->bustype}}</td>
                <td>

                    <a class="btn btn-outline-warning btn-sm" href={{"edit/".$updatebus['id']}}>Edit</a>

                </td>

                <td> 
                    <a class="btn btn-outline-danger btn-sm" href={{"delete/".$updatebus['id']}}> Delete </a> 
                </td>
                <td>
                    <?php if($updatebus->status == '1'){ ?>
                    <a href="{{url('/busstatus',$updatebus->id)}}" class="btn btn-success btn-sm">Active</a>
                    
                    <?php }else { ?>
                      <a href="{{url('/busstatus',$updatebus->id)}}" class="btn btn-danger btn-sm">Inactive</a>
                    <?php } ?>
                </td>
            </tr>             
            </tbody>
            @endforeach
    </table>
  
  
@stop