<!DOCTYPE html>
<html>
<title>Bus Reservation System</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{asset('landingpage/css/w3schools.css')}}">
{{-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> --}}
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}

</style>
<body class="w3-light-grey">

<!-- Navigation Bar -->
<div class="w3-bar w3-white w3-large">
    <a href="/" class="w3-bar-item w3-button w3-green w3-mobile"><i class="fa fa-bus w3-margin-right"></i>Home</a>
    <a href="/routes" class="w3-bar-item w3-button w3-mobile">Routes</a>
    <a href="#contact" class="w3-bar-item w3-button w3-mobile">Tickets</a>
    <a href="#about" class="w3-bar-item w3-button w3-mobile">About</a>
    <a href="#contact" class="w3-bar-item w3-button w3-mobile">Contact</a>
    <a href="/register" class="w3-bar-item w3-button w3-right w3-light-red w3-mobile">Sign Up</a>
    <a href="/login" class="w3-bar-item w3-button w3-right w3-light-red w3-mobile">Login</a>
  </div>

<!-- Header -->
<header class="w3-display-container w3-content" style="max-width:1500px;">
  <img class="w3-image" src="{{asset('landingpage/images/bus-banner5.jpg')}}" alt="BUS BANNER" width="100%" height="400px" >
  <div class="w3-display-left w3-padding w3-col l6 m8">
    <div class="w3-container w3-green">
      <h2><i class="fa fa-bus w3-margin-right"></i> Find Buses</h2>
    </div>
    <div class="w3-container w3-white w3-padding-16">
      <form action="/routes" target="_blank">
        <div class="w3-row-padding" style="margin:0 -16px;">
          <div class="w3-half w3-margin-bottom">
            <label><i class="fa fa-male"></i> Leaving From</label>
            <input class="w3-input w3-border" type="text" placeholder="Enter City(Eg:Kathmandu)" name="CheckIn" required>
          </div>
          <div class="w3-half">
            <label><i class="fa fa-male"></i> Going Destinaation</label>
            <input class="w3-input w3-border" type="text" placeholder="Enter City(Eg:Pokhara)" name="CheckOut" required>
          </div>
        </div>
        {{-- <div class="w3-row-padding" style="margin:8px -8px;">
          <div class="w3-full w3-margin-bottom">
            <label><i class="fa fa-calendar-o"></i> Travel Date </label>
            <input class="w3-input w3-border" type="date">
          </div>
        </div> --}}
        <button class="w3-button w3-dark-grey" type="submit"><i class="fa fa-search w3-margin-right"></i> Search Available Buses</button>
      </form>
    </div>
  </div>
</header>

<!-- Page content -->
<div class="w3-content" style="max-width:1532px;">

  <div class="w3-container w3-margin-top" id="rooms">
    <h3>Our Bus Patners and Features</h3>
    <p>Travel Easy, Travel Everywhere and Travel on time is our slogan. We offer the best bus available in the whole country. Your destination on relaible price.</p>
  </div>
  
  

  <div class="w3-row-padding w3-padding-16">
    <div class="w3-third w3-margin-bottom">
      <img src="/landingpage/images/MaitriBhagya.jpg" alt="Norway" style=" width: 100%; height: 220px">
      <div class="w3-container w3-white">
        <h3>Adventure Travels</h3>
        <h6 class="w3-opacity">Starting From Rs. 2,499</h6>
        <p>Wifi</p>
        <p>Ac</p>
        <p>Music System</p>
        <p>Comfortable Seats</p>
        <p>First Aid Kits</p>
        <p>Mobile Charger</p>
        <p>Mineral Water</p>
        <p>On Time Depature</p>
        <p class="w3-large"> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i> <i class="fa fa-tv"></i> <i class="fa fa-glass"></i> <i class="fa fa-cutlery"></i></p>
      </div>
    </div>
    <div class="w3-third w3-margin-bottom">
      <img src="/landingpage/images/namaste-kapilvastu.jpg" alt="Norway" style=" width: 100%; height: 220px">
      <div class="w3-container w3-white">
        <h3>Namaste Kapilvastu</h3>
        <h6 class="w3-opacity"> Starting From Rs. 2,199</h6>
        <p>Wifi</p>
        <p>Ac</p>
        <p>Music System</p>
        <p>Comfortable Seats</p>
        <p>First Aid Kits</p>
        <p>Reading Lights</p>
        <p>Mineral Water</p>
        <p>Passenger Insurance</p>
        <p class="w3-large"> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i> <i class="fa fa-tv"></i> <i class="fa fa-glass"></i> </p>
      </div>
    </div>
    <div class="w3-third w3-margin-bottom">
      <img src="/landingpage/images/sai-baba.jpg" alt="Norway" style=" width: 100%; height: 220px">
      <div class="w3-container w3-white">
        <h3>Sai Baba </h3>
        <h6 class="w3-opacity">Starting From Rs. 1,899</h6>
        <p>Wifi</p>
        <p>Tea</p>
        <p>Music System</p>
        <p>Comfortable Seats</p>
        <p>LED TV</p>
        <p>Air Cooler</p>
        <p>Snacks</p>
        <p>On Time Depature</p>
        <p class="w3-large"> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i> <i class="fa fa-tv"></i> <i class="fa fa-glass"></i></p>
      </div>
    </div>
  </div>

  <div class="w3-row-padding" id="about">
    <div class="w3-col l4 12">
      <h3>About</h3>
      <h6>BRS a.k.a Bus Reservation System is an online bus ticket booking application powered by BRS Technology Pvt Ltd. BRS came into existence with a vision of making a difference in travel and transport industry of Nepal by adding a flavour of Information Technology to it.
        We provides unique experience of bus ticket booking for its users. You get plenty of choices to pick from and we make sure you have a smooth and comfortable travel wherever you go. We have various affiliates running tourist buses to and from Kathmandu, Pokhara, Chitwan and so on. You can pick the bus of your choice, the time you want to travel and moreover the seats you like that too in just minutes.</h6>
    <p>We accept: <i class="fa fa-credit-card w3-large"></i> <i class="fa fa-cc-mastercard w3-large"></i> <i class="fa fa-cc-amex w3-large"></i> <i class="fa fa-cc-cc-visa w3-large"></i><i class="fa fa-cc-paypal w3-large"></i></p>
    </div>
    <div class="w3-col l8 12">
      <!-- Image of location/map -->
      <img src="/landingpage/images/bus-banner3.jpg" width="80%" class="w3-image w3-right" ; >
    </div>
  </div>
  
  <div class="w3-panel w3-green w3-leftbar w3-padding-32">
    <h6><i class="fa fa-info w3-deep-orange w3-padding w3-margin-right"></i> On demand, we can offer custom food , special drinks, necessary medicine for every customer etc.</h6>
  </div>

  <div class="w3-container w3-padding-32 w3-black w3-opacity w3-card w3-hover-opacity-off" style="margin:32px 0;">
    <h2>Get the best offers first!</h2>
    <p>Join our newsletter.</p>
    <label>E-mail</label>
    <input class="w3-input w3-border" type="text" placeholder="Your Email address">
    <button type="button" class="w3-button w3-green w3-margin-top">Subscribe</button>
  </div>

  <div class="w3-container" id="contact">
    <h2>Contact</h2>
    <p>If you have any questions, do not hesitate to ask our team.</p>
    <i class="fa fa-map-marker w3-text-red" style="width:30px"></i> Lalitpur, Nepal<br>
    <i class="fa fa-phone w3-text-red" style="width:30px"></i> Phone: +01 5581515<br>
    <i class="fa fa-envelope w3-text-red" style="width:30px"> </i> Email: brs@gmail.com<br>
    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Message" required name="Message"></p>
      <p><button class="w3-button w3-black w3-padding-large" type="submit">SEND MESSAGE</button></p>
    </form>
  </div>

<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-padding-32 w3-black w3-center w3-margin-top">
  <h5>Copyright © 2021 | Bus Reservation System</h5>
</footer>

</body>
</html>
