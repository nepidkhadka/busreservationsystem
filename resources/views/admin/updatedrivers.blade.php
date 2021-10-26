@extends('adminlte::page')

@section('title', 'Update Drivers')

@section('content_header')
    <h1>Update Drivers</h1>
@stop

@section('content')
    <div class="alert alert-dark" role="alert">
        The available drivers to update are listed below
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
                    <th scope="col">Driver ID</th>
                    <th scope="col">Driver Name</th>
                    <th scope="col">License Number</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Address</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                    <th scope="col">Status</th>
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
                <td>

                    <a class="btn btn-outline-warning btn-sm" href={{"editdriver/".$listdriver['id']}}>Edit</a>

                </td>

                <td> 
                    <a class="btn btn-outline-danger btn-sm" href={{"deletedriver/".$listdriver['id']}}> Delete </a> 
                </td>
                <td>
                    <?php if($listdriver->status == '1'){ ?>
                    <a href="{{url('/driverstatus',$listdriver->id)}}" class="btn btn-success btn-sm">Active</a>
                    
                    <?php }else { ?>
                      <a href="{{url('/driverstatus',$listdriver->id)}}" class="btn btn-danger btn-sm">Inactive</a>
                    <?php } ?>
                </td>
            </tr>             
            </tbody>
            @endforeach
    </table>
  
  
@stop