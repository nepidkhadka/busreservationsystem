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
    @if(\Session::has('danger'))
    <div class="alert alert-danger">
            <h6>{{ \Session::get('danger') }}</h6>
        </div>
     @endif

     @if(\Session::has('success'))
     <div class="alert alert-success">
         <h6>{{ \Session::get('success') }}</h6>
     </div>
         
     @endif

    <table class="table table-bordered table-striped">
            <thead class="table-dark">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Source Location</th>
                <th scope="col">Destination Location</th>
                <th scope="col">Route Name</th>
                <th scope="col">Delete</th>
                <th scope="col">Status</th>
              </tr>
            </thead>

            @foreach($listroutes as $listroutes)

            <tbody>
              <tr>           
                <td>{{$listroutes->id}}</td>
                <td>{{$listroutes->sourcelocation}}</td>
                <td>{{$listroutes->destinationlocation}}</td>
                <td>{{$listroutes->routename}}</td>
                <td> 
                  <a class="btn btn-outline-danger btn-sm" href={{"deleteroutes/".$listroutes['id']}}> Delete </a> 
                </td>
                <td>
                  <?php if($listroutes->status == '1'){ ?>
                  <a href="{{url('/routestatus',$listroutes->id)}}" class="btn btn-success btn-sm">Active</a>
                  
                  <?php }else { ?>
                    <a href="{{url('/routestatus',$listroutes->id)}}" class="btn btn-danger btn-sm">Inactive</a>
                  <?php } ?>
              </td>
              </tr>             
            </tbody>
            @endforeach
    </table>
  
  
@stop