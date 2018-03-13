<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="#band" class="w3-bar-item w3-button w3-padding-large w3-hide-small">COURSES</a>
    <a href="#tour" class="w3-bar-item w3-button w3-padding-large w3-hide-small">SIGN IN</a>
    <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">TUTOR</a>
    <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More">MORE <i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="#" class="w3-bar-item w3-button">About Us</a>
        <a href="#" class="w3-bar-item w3-button">Founder</a>
      </div>
    </div>
    
  </div>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="#band" class="w3-bar-item w3-button w3-padding-large">BAND</a>
  <a href="#tour" class="w3-bar-item w3-button w3-padding-large">TOUR</a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large">CONTACT</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">MERCH</a>
</div>

<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

  <!-- Automatic Slideshow Images -->
  <div class="mySlides w3-display-container w3-center">
    <img src="https://www.teachervision.com/images/tv/hub/TV-hub-bigstock--133695947.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="LOGO.jpeg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="https://2.bp.blogspot.com/-bfibIelz-5I/VrmCGQ9Ju-I/AAAAAAAAABQ/e0QjvH0MKks/s1600/clases_1024.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>learning videos</h3>
      <p><b>Helps student gain knowledge as they are studying in classroom itself.</b></p>    
    </div>
  </div>

  <!-- The Band Section -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <h2 class="w3-wide">Courses</h2>
    <p class="w3-opacity"><i>Learning with love.</i></p>
    <p class="w3-justify">The main motive of this website is to make student learn stuffs which are hard for him to find in school or in any tution classes in order to provide all thes we are offering som of the courses that students can get  </p>
    <div class="w3-row w3-padding-32">
      <div class="w3-third">
        <p style="font-size: 35px;">C-programming</p>
        <img src="https://cortexitrecruitment.com/wp-content/uploads/2015/08/laptop-guy.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
      </div>
      <div class="w3-third">
        <p style="font-size:35px;">Html and Css</p>
        <img src="https://udemy-images.udemy.com/course/750x422/792484_cc98_3.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
      </div>
      <div class="w3-third">
        <p style="font-size: 35px;">Python</p>
        <img src="data:image/png;base64,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" class="w3-round" alt="Random Name" style="width:60%">
      </div>
    </div>
  </div>

  <!-- The Tour Section -->
  <div class="w3-black" id="tour">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
      <h2 class="w3-wide w3-center">TOUR DATES</h2>
      <p class="w3-opacity w3-center"><i>Remember to book your tickets!</i></p><br>

      <ul class="w3-ul w3-border w3-white w3-text-grey">
        <li class="w3-padding">September <span class="w3-tag w3-red w3-margin-left">Sold out</span></li>
        <li class="w3-padding">October <span class="w3-tag w3-red w3-margin-left">Sold out</span></li>
        <li class="w3-padding">November <span class="w3-badge w3-right w3-margin-right">3</span></li>
      </ul>

      <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
        <div class="w3-third w3-margin-bottom">
          <img src="/w3images/newyork.jpg" alt="New York" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>New York</b></p>
            <p class="w3-opacity">Fri 27 Nov 2016</p>
            <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Buy Tickets</button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="/w3images/paris.jpg" alt="Paris" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Paris</b></p>
            <p class="w3-opacity">Sat 28 Nov 2016</p>
            <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Buy Tickets</button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="/w3images/sanfran.jpg" alt="San Francisco" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>San Francisco</b></p>
            <p class="w3-opacity">Sun 29 Nov 2016</p>
            <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Buy Tickets</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Ticket Modal -->
  <div id="ticketModal" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4">
      <header class="w3-container w3-teal w3-center w3-padding-32"> 
        <span onclick="document.getElementById('ticketModal').style.display='none'" 
       class="w3-button w3-teal w3-xlarge w3-display-topright">×</span>
        <h2 class="w3-wide"><i class="fa fa-suitcase w3-margin-right"></i>Tickets</h2>
      </header>
      <div class="w3-container">
        <p><label><i class="fa fa-shopping-cart"></i> Tickets, $15 per person</label></p>
        <input class="w3-input w3-border" type="text" placeholder="How many?">
        <p><label><i class="fa fa-user"></i> Send To</label></p>
        <input class="w3-input w3-border" type="text" placeholder="Enter email">
        <button class="w3-button w3-block w3-teal w3-padding-16 w3-section w3-right">PAY <i class="fa fa-check"></i></button>
        <button class="w3-button w3-red w3-section" onclick="document.getElementById('ticketModal').style.display='none'">Close <i class="fa fa-remove"></i></button>
        <p class="w3-right">Need <a href="#" class="w3-text-blue">help?</a></p>
      </div>
    </div>
  </div>

  <!-- The Contact Section -->
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
    <h2 class="w3-wide w3-center">CONTACT</h2>
    <p class="w3-opacity w3-center"><i>Fan? Drop a note!</i></p>
    <div class="w3-row w3-padding-32">
      <div class="w3-col m6 w3-large w3-margin-bottom">
        <i class="fa fa-map-marker" style="width:30px"></i> NITK,Mangalore,INDIA<br>
        <i class="fa fa-phone" style="width:30px"></i> Phone: +081 247546<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: mail@mail.com<br>
      </div>
      <div class="w3-col m6">
        <form action="/action_page.php" target="_blank">
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
            </div>
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
            </div>
          </div>
          <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
          <button class="w3-button w3-black w3-section w3-right" type="submit">SEND</button>
        </form>
      </div>
    </div>
  </div>
  
<!-- End Page Content -->
</div>

<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
</footer>

<script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 4000);    
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>
