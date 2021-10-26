<!DOCTYPE html>
<html>
<title>Bus Reservation System</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{asset('/landingpage/css/slideshow.css')}}">
<link rel="stylesheet" href="{{asset('/landingpage/css/bootstrap.min.css')}}">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}

</style>
<body class="w3-light-grey">

<!-- Navigation Bar -->
<div class="w3-bar w3-white w3-large">
    <a href="/" class="w3-bar-item w3-button w3-green w3-mobile"><i class="fa fa-bus w3-margin-right"></i>Home</a>
    <a href="/routes" class="w3-bar-item w3-button w3-mobile">Routes</a>
    <a href="#contact" class="w3-bar-item w3-button w3-mobile">Reservation</a>
    <a href="#contact" class="w3-bar-item w3-button w3-mobile">Tickets</a>
    <a href="#about" class="w3-bar-item w3-button w3-mobile">About</a>
    <a href="#contact" class="w3-bar-item w3-button w3-mobile">Contact</a>
    <a href="/register" class="w3-bar-item w3-button w3-right w3-light-red w3-mobile">Sign Up</a>
    <a href="/login" class="w3-bar-item w3-button w3-right w3-light-red w3-mobile">Login</a>
  </div>

  
  
{{-- Routes Tab Start Here--}}

<header class="w3-display-container w3-content w3-hide-small" style="max-width:1500px">
    <img class="w3-image" src="/landingpage/images/lnp-nepal.jpg" alt="nepal" width="1920px" >
    <div class="w3-display-middle" style="width:65%">
        <div id="Flight" class="w3-container w3-white w3-padding-16 myLink">
          <div class="w3-container w3-green">
            <h3>Available Routes</h3>
          </div>
          <hr>
          <table class="table table-light">
            <thead class="table-primary">
              <tr>
                <th scope="col">Source Location</th>
                <th scope="col">Destination Location</th>
                <th scope="col">Route Name</th>
              </tr>
            </thead>

            @foreach($listroutes as $listroutes)

            <tbody>
              <tr>           
                <td>{{$listroutes->sourcelocation}}</td>
                <td>{{$listroutes->destinationlocation}}</td>
                <td>{{$listroutes->routename}}</td>
              </tr>             
            </tbody>
            @endforeach
    </table>
  
          {{-- <div class="w3-container w3-red">
            <h3>Find Routes</h3>
          </div> --}}
            {{-- <div class="w3-row-padding" style="margin:0 -16px;">
            <div class="w3-half">
                <label>From</label>
                <input class="w3-input w3-border" type="text" placeholder="Departing from">
            </div>
            <div class="w3-half">
                <label>To</label>
                <input class="w3-input w3-border" type="text" placeholder="Arriving at">
            </div>
            </div>
    <p><button class="w3-button w3-dark-grey">Search available routes</button></p> --}}
      </div>
    </div>
</header> 

{{-- Routes Tab End Here --}}


<!-- Footer -->
<footer class="w3-padding-32 w3-black w3-center w3-margin-top">
    <h5>Copyright © 2021 | Bus Reservation System</h5>
  </footer>