<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/gif/png" href="newlogo.png">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
.w3-bar-block .w3-bar-item {padding:20px; opacity: 0.6; filter: alpha(opacity=60)}
.container            { overflow: hidden;}
.content, .sidebar    { padding-bottom: 99999px; margin-bottom: -99999px;}
body {
    background-image: url('back.jpg');
    background-size: 100% 100%;
}
.hm{
  font-size: 45px;
  font-style: Sans-serif;
  font-family: Georgia;
}
#f,#o{
  border: solid black 0.5px;
  border-radius: 5px;
}
</style>
<body>

<!-- Sidebar (hidden by default) -->
<nav class="w3-sidebar w3-bar-block w3-top w3-xlarge w3-animate-top" style="display:none;z-index:2;width:5%;min-width:250px" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()"
  class="w3-bar-item w3-button">Close Menu</a>
  <a href="studentpage.php" onclick="w3_close()" class="w3-bar-item w3-button">Home</a>
</nav>

<!-- Top menu -->
<div class="w3-top">
  <div class="w3-white w3-xxlarge" style="max-width:1275px;margin:auto">
    <div class="w3-button w3-padding-16 w3-left" onclick="w3_open()">☰</div>
    <div class="w3-center w3-padding-16">Courses Offered</div>
  </div>
</div>
  
<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px" id="f">

  <!-- First Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center">
    <div class="w3-quarter">
      <img src="1.jpg" alt="Sandwich" style="width:75%;border:solid black 0.5px; border-radius: 5px;" >
      <h3 style="color: white; -webkit-text-stroke-width: 0.5px;
   -webkit-text-stroke-color: black;">Amar Akbar Antony
       <p>Course : Python</p>
      </h3>
    </div>
    <div class="w3-quarter">
      <img src="2.jpg" alt="Steak" style="width:80%; height: 310px;border:solid black 0.5px;  border-radius: 5px;">
      <h3 style="color: white; -webkit-text-stroke-width: 0.4px;
   -webkit-text-stroke-color: black;">Hobart kane
       <p>Course : C-Programming</p>
      </h3>
    </div>
    <div class="w3-quarter">
      <img src="3.jpg" alt="Cherries" style="width:80%; height: 310px;border:solid black 0.5px;  border-radius: 5px;">
      <h3 style="color: white;-webkit-text-stroke-width: 0.4px;
   -webkit-text-stroke-color: black; ">Ibhrahim
       <p>Course : C and C++</p>
     </h3>
    </div>
    <div class="w3-quarter">
      <img src="4.jpg" alt="Pasta and Wine" style="width:80%; height: 310px;border:solid black 0.5px;  border-radius: 5px;">
      <h3 style="color: white; -webkit-text-stroke-width: 0.4px;
   -webkit-text-stroke-color: black;">Anderson
       <p>Course : Android </p>
     </h3>
      
    </div>
  </div>
  
  <!-- Second Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center">
    <div class="w3-quarter">
      <img src="5.jpg" alt="Popsicle" style="width:80%; height: 310px;border:solid black 0.5px;  border-radius: 5px;">
      <h3 style="color: black; -webkit-text-stroke-width: 0.15px;
   -webkit-text-stroke-color: red;">Alice
      <p>Course : HTML</p>
    </h3>
    </div>
    <div class="w3-quarter">
      <img src="6.jpg" alt="Salmon" style="width:80%; height: 310px;border:solid black 0.5px;  border-radius: 5px;">
      <h3 style="color: black; -webkit-text-stroke-width: 0.15px;
   -webkit-text-stroke-color: red;">Ramnath
       <p>Course : HTML and JavaScript</p>
      </h3>
      </div>
    <div class="w3-quarter">
      <img src="7.jpg" alt="Sandwich" style="width:80%; height: 310px;border:solid black 0.5px;  border-radius: 5px;">
      <h3 style="color: black; -webkit-text-stroke-width: 0.15px;
   -webkit-text-stroke-color: red;">Emma anderson
       <p>Course : Jquery</p>
      </h3>
      </div>
    <div class="w3-quarter">
      <img src="8.jpg" alt="Croissant" style="width:80%; height: 310px;border:solid black 0.5px;  border-radius: 5px;">
      <h3 style="color: black; -webkit-text-stroke-width: 0.15px;
   -webkit-text-stroke-color: red;">Hank
       <p>Course : AJAX and AngularJS</p>
      </h3>
   </div>   
  </div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}
</script>

</body>
</html>
