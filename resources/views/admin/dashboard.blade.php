@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>BRS - Dashboard</h1>
    <hr>
@stop

@section('content')
  <div class="row">
    <div class="col-lg-3 col-6">
      <!-- small card -->
      <div class="small-box bg-info">
        <div class="inner">
          <h3>{{ $total_bus }}</h3>

          <p>Total Buses</p>
        </div>
        <div class="icon">
          <i class="fas  fa-bus"></i>
        </div>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small card -->
      <div class="small-box bg-success">
        <div class="inner">
          <h3>{{ $total_routes}} </h3>

          <p>Total Routes</p>
        </div>
        <div class="icon">
          <i class="fas  fa-map-signs"></i>
        </div>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small card -->
      <div class="small-box bg-warning">
        <div class="inner">
          <h3>{{ $total_drivers}}</h3>

          <p>Total Drivers</p>
        </div>
        <div class="icon">
          <i class="fas fa-user-plus"></i>
        </div>
      </div>
    </div>
    <!-- ./col -->
    {{-- <div class="col-lg-3 col-6">
      <!-- small card -->
      <div class="small-box bg-danger">
        <div class="inner">
          <h3>10</h3>

          <p>Total Tickets</p>
        </div>
        <div class="icon">
          <i class="fas fa-bookmark"></i>
        </div>
      </div>
    </div> --}}
    <!-- ./col -->

    <div class="col-lg-3 col-6">
      <!-- small card -->
      <div class="small-box bg-maroon">
        <div class="inner">
          <h3>{{ $total_users }}</h3>

          <p>Registered Users</p>
        </div>
        <div class="icon">
          <i class="fas  fa-users"></i>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-6">
      <!-- small card -->
      <div class="small-box bg-purple">
        <div class="inner">
          <h3>{{ $added_passengers }}</h3>

          <p>Added Passengers</p>
        </div>
        <div class="icon">
          <i class="fas  fa-child"></i>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-6">
      <!-- small card -->
      <div class="small-box bg-fuchsia ">
        <div class="inner">
          <h3>{{ $total_reservation }}</h3>

          <p>Total Reservation</p>
        </div>
        <div class="icon">
          <i class="fas  fa-list-alt"></i>
        </div>
      </div>
    </div>

  </div>
  <!-- /.row -->

  <hr>

@stop