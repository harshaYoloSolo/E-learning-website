<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/gif/png" href="newlogo.png">
<title>
	E-TUTOR
</title>
<style>
  
  *{
  margin: 0;
  padding 0;
  }
  @keyframes slide{
  0%{
  left:0;
  }
  10%{
  left: 0;
  }
  20%{
  left: -100%;
  } 
  30%{
  left: -100%;
  } 
  40%{
  left: -200%;
  } 
  50%{
  left: -200%;
  } 
  60%{
  left: -300%;
  } 
  70%{
  left: -300%;
  } 
  80%{
  left: -400%;
  }
   90%{
  left: -400%;
  }
   100%{
  left: 0;
  }
  }
 #slider{
  //margin-top:60px;
  overflow:hidden;
  }
  #slider figure img {
  float: left;
  width: 20%;
  }
  #slider figure{
  position:relative;
  width:500%;
  animation: slide 20s infinite;
  }
  
  .grid{
  display:grid;
  grid-template-rows: 520px 215px 1fr 1fr;
  }
  .data{
  //background-color:grey;
  }
  .about{
  background-image: url("back.jpg");
  margin-top:-0.5px;
  opacity:0.95;
  background-size: 100% 100%;
  }
  .faq{
   //background-color:grey;
  }
  
  .dgrid{
   display:grid;
   grid-template-columns:1fr 1fr;
  }

  .vid{
  margin-left:1px;
  margin-top:10px;
  }
  .notes{
   margin-left:10px;
   margin-top:10px;
   margin-right:1px;
  }
  .feed{
   margin-left:10px;
  }
  #vt{
     margin-left:18px;
  }
 
 header
{
	font-family: 'Lobster', cursive;
	text-align: center;
	font-size: 25px;	
}

#info
{
	font-size: 18px;
	color: #555;
	text-align: center;
	margin-bottom: 25px;
}

a{
	color: #074E8C;
}

.scrollbar
{
	margin-left: 30px;
	float: left;
	height: 80px;
	width: 500px;
	background: #F5F5F5;
	overflow-y: scroll;
}

.force-overflow
{
	min-height: auto;
}

#wrapper
{
	text-align: center;
	width: 500px;
	margin: auto;
}
 
 
 #style-7::-webkit-scrollbar-track
{
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
	background-color: #F5F5F5;
	border-radius: 10px;
}

#style-7::-webkit-scrollbar
{
	width: 10px;
	background-color: #F5F5F5;
}

#style-7::-webkit-scrollbar-thumb
{
	border-radius: 10px;
	background-image: -webkit-gradient(linear,
									   left bottom,
									   left top,
									   color-stop(0.44, rgb(122,153,217)),
									   color-stop(0.72, rgb(73,125,189)),
									   color-stop(0.86, rgb(28,58,148)));
}
 

 .com{
  margin-left:30px;
 }
 #cmt{
    margin-top:3px;
    border-radius:10px;
	border-color:grey;
    width:393px;
	padding: 7px;
	line-height: 10px;
 }

 #bt{
    border-radius:10px;
	border-color:grey;
    padding: 7px;
	line-height: 10px;
	-webkit-transition-duration: 0.4s;
    transition-duration: 0.4s;
 }
 
 #bt:hover{
     background-color: #4CAF50; /* Green */
    color: white;
	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);

 }
 
 #bt2{
    border-radius:10px;
	border-color:grey;
    padding: 6.2px;
	line-height: 13px;
	-webkit-transition-duration: 0.4s;
    transition-duration: 0.4s;
	margin-left:510px;
	width:180px;
 }
 
 #bt2:hover{
     background-color: #4CAF50; /* Green */
    color: white;
	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);

 }
 
 #chaps{
    border-radius:10px;
    margin-bottom:2px;
	border-color:grey;
    padding: 4.5px;
	width:180px;
	
 }
 
 .abgrid{
   display:grid;
   grid-template-columns:1fr 1fr 1fr;
 }
 
 a{
  text-decoration:none;
 }
 
 div.description{
	position:absolute; /* absolute position (so we can position it where we want)*/
	bottom:-498px; /* position will be on bottom */
	left:0px;
	width:450px;
	background-color:;
	color:white;
	font-color:black;
	opacity:1.0; /* transparency */
	filter:alpha(opacity=60); /* IE transparency */
}
p.description_content{
	padding:10px;
	margin:0px;
	margin-left:45px;
	font-size: 30px;
}

.cn{

 margin-top:20px;
 margin-left:15px;
 font-family:"Georgia";
 font-size:35px;
 color:white;
 opacity:0.6;
 
}
.int{
 //background-color:black;
}
.hv:hover {
    background-color: #ddd;
    color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
    background-color: #4CAF50;
    color: white;
}

.topnav {
    background-color: #333;
    overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
    float: left;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
}

.logo{
  float:left;
  width:80px;
  height:48px;
}

 .ltd
   {
    position:absolute;
	bottom:605px;
	width:205px;
	opacity:3;
	filter:alpha(opacity=60);
}
  .lt{	
    padding:8px;
	margin-bottom:3px;
	color:black;
	font-size: 6.8px;
}
.end{
 margin-left:1096px;
}
.title{
 margin-left:20px;
 color:white;
}

#next{
    float:right;
    margin-top:150px;
    display: inline-block;
    padding: 8px 16px;
}

#next:hover {
    background-color:#c2d6d6;
    color: white;
}
#prev{
    float:left;
	margin-top:150px;
    display: inline-block;
    padding: 8px 16px;
}

#prev:hover {
    background-color:#c2d6d6;
    color: white;
}
</style>
<script>
var i=1;
var videoList=['vid1.mp4','vid2.mp4','vid3.mp4','vid4.mp4','vid5.mp4','vid6.mp4','vid7.mp4','vid8.mp4'];
function nextchange()
{	
  var myVideo = document.getElementById('currentVideo');
  myVideo.pause();
  myVideo.currentTime=0;
  var nxt=document.getElementById('v1');
  i++;
  if(i>videoList.length-1)
   i=0;
  nxt.setAttribute("src",videoList[i]);
  myVideo.load()
  myVideo.play();
}
function prevchange()
{	
  var myVideo = document.getElementById('currentVideo');
  myVideo.pause();
  myVideo.currentTime=0;
  var nxt=document.getElementById('v1');
  i--;
  if(i<0)
   i=videoList.length-1;
  nxt.setAttribute("src",videoList[i]);
  myVideo.load()
  myVideo.play();
}

</script>
</head>
<body>
   <div class="topnav">
    <div>
	 <img class="logo" src="newlogo.png">
	 <div class="ltd">
	 <p class="lt"></p>
	 </div>
	</div>
  <a class="active" href="Abouttut.php">Programming Languages E-learning</a>
  <a  disabled>Place For Innovation On Existing Technology</a>
  <div class="end">
  <a class="hv" id="acn" href="#section1">Contact</a>
  <a class="hv" id="ab" href="#section1">About</a>
  <a class="hv" id="so" href="main-page.php.html">Sign Out</a>
  </div>
   </div>
   <div id="slider">
	<figure>
	 <img src="python.jpg" width="100%" height="384px" alt="maths"></img>
	 <img src="html.jpg" alt="maths" width="100%" height="384px"></img>
	 <img src="c.jpg" alt="maths" width="100%" height="384px"></img>
	 <img src="ajs.jpg" width="100%" height="384px" alt="maths"></img>
     <img src="java.jpg" width="100%" height="384px" alt="maths"></img>
	</figure>
   </div>
   <div class="grid" >
    <div class="data">
		<div class="dgrid">
		<div class="vid">
		 <fieldset class="tutorials">
		  <legend>VIDEO TUTORIALS</legend>
		  <button id="prev" onclick="prevchange();">&#8249;</button>	
		  <video id="currentVideo" width="511" height="319" controls>
		  <source id="v1" src="vid8.mp4" type="video/mp4">
		  </video>
		  <button id="next" onclick="nextchange();">&#8250</button>	  
		   <fieldset>
		   <legend>COMMENTS</legend>
           <div class="scrollbar" id="style-7">
            <div class="force-overflow">
            	<?php
                 $username = "";
					$email = "";
					$errors = "";
					$db = mysqli_connect('localhost','root','123456789','registration');
					if(isset($_POST['com']))
					{

						$ct=$_POST['cmt'];
						if(strcmp($ct,'')!=0)
						$sql="INSERT INTO comment VALUES('$ct')";
						$r=mysqli_query($db, $sql);
						unset($_POST['com']);						
                   }
                   $sql="SELECT * from comment";
						$r=mysqli_query($db, $sql);
                        if (mysqli_num_rows($r) > 0) {
                        while($row = mysqli_fetch_assoc($r)) {
                          echo "<p>" .$row["data"]. "</p>";
                           }
                       }
            	?>
			</div>
		   </div>
		   <div class="com">
		    <form action="studentpage.php" method="POST">
			<input id="cmt" type="text" size="30" placeholder="type-here" name="cmt"></input>
			<input id="bt" type="SUBMIT" value="COMMENT" name="com" onclick="alert('Comment Has Been Posted.')"></input>
			</form>
			
		   </div>
		   </fieldset>
		 </fieldset>
		</div>
		<div class="pdf">
		 <fieldset class="notes">
		  <legend>NOTES</legend>
           <ol>
		   <li><a onclick="window.open('/15IT211_harshak/E-learning_website/pdf1.pdf');">Chapter 1</a> <span>Python Basics. </span></li>
		   <li><a onclick="window.open('/15IT211_harshak/E-learning_website/pdf2.pdf');">Chapter 2</a> <span>Introduction to Programming
Languages and Techniques</span></li>
		   <li><a onclick="window.open('/15IT211_harshak/E-learning_website/pdf3.pdf');">Chapter 3</a> <span>C Programming Tutorial</span></li>
		   <li><a onclick="window.open('/15IT211_harshak/E-learning_website/pdf4.pdf');">Chapter 4</a> <span>C-Looping Statements.</span></li>
		   <li><a onclick="window.open('/15IT211_harshak/E-learning_website/pdf5.pdf');">Chapter 5</a> <span>The C++ Language.</span></li>
		   <li><a onclick="window.open('/15IT211_harshak/E-learning_website/pdf6.pdf');">Chapter 6</a> <span>C-Functions</span></li>
		   <li><a onclick="window.open('/15IT211_harshak/E-learning_website/pdf7.pdf');">Chapter 7</a> <span>A Introduction To Android Development.</span></li>
		   <li><a onclick="window.open('/15IT211_harshak/E-learning_website/pdf8.pdf');">Chapter 8</a> <span>Useful HTML tags and their att ributes.</span></li>
		   <li><a onclick="window.open('/15IT211_harshak/E-learning_website/pdf9.pdf');">Chapter 9</a> <span>Html Fonts.</span></li>
		   <li><a onclick="window.open('/15IT211_harshak/E-learning_website/pdf10.pdf');">Chapter 10</a> <span>Creating a modern, standards-compliant website
using tags, CSS, and Templates .</span></li>
		   <li><a onclick="window.open('/15IT211_harshak/E-learning_website/pdf11.pdf');">Chapter 11</a> <span>HTML Div Tag.</span></li>
		   <li><a onclick="window.open('/15IT211_harshak/E-learning_website/pdf12.pdf');">Chapter 12</a> <span>Eloquent JavaScript
A Modern Introduction to Programming.</span></li>
		   <li><a onclick="window.open('/15IT211_harshak/E-learning_website/pdf13.pdf');">Chapter 13</a> <span>Introduction To Jquery.</span></li>
		   <li><a onclick="window.open('/15IT211_harshak/E-learning_website/pdf14.pdf');">Chapter 14</a> <span>jQuery Fundamentals.</span></li>
		   <li><a onclick="window.open('/15IT211_harshak/E-learning_website/pdf15.pdf');">Chapter 15</a> <span>Introduction To AJAX.</span></li>
		   <li><a onclick="window.open('/15IT211_harshak/E-learning_website/pdf16.pdf');">Chapter 16</a> <span>AJAX with jQuery.</span></li>
		   <li><a onclick="window.open('/15IT211_harshak/E-learning_website/pdf17.pdf');">Chapter 17</a> <span>Introduction to Cascading Style Sheets.</span></li>
		   <li><a onclick="window.open('/15IT211_harshak/E-learning_website/pdf18.pdf');">Chapter 18</a> <span>A Tutorial on Pointers and Arrays In C
.</span></li>
		   <ol/>
		 </fieldset>
		  <fieldset class="feed">
		  <legend>QUESTION?</legend>
		  <form action="submit.php" method="POST">
		  <select id="chaps" name="chap">
		   <option selected disabled>Chapter NO.</option>
		   <option value="1">Chapter 1</option>
		   <option value="2">Chapter 2</option>
		   <option value="3">Chapter 3</option>
		   <option value="4">Chapter 4</option>
		   <option value="5">Chapter 5</option>
		   <option value="6">Chapter 6</option>
		   <option value="7">Chapter 7</option>
		   <option value="8">Chapter 8</option>
		   <option value="9">Chapter 9</option>
		   <option value="10">Chapter 10</option>
		   <option value="11">Chapter 11</option>
		   <option value="12">Chapter 12</option>
		   <option value="13">Chapter 13</option>
		   <option value="14">Chapter 14</option>
		   <option value="15">Chapter 15</option>
		   <option value="16">Chapter 16</option>
		   <option value="17">Chapter 17</option>
		   <option value="18">Chapter 18</option>
		  </select>
		 <textarea class="fd" name="que" rows="3" cols="95">
		 </textarea>
		 <input id="bt2" type="SUBMIT" ></input>
		 </fieldset>
		 </form>
		</div>
	  </div>
	</div>
	<div class="about">
	 <a id="section1"></a>
	 <div class="abgrid">
	 <div class="int">
	  <img src="newlogo.png" width="400" height="196" style="margin-top: 10px; margin-left: 3px;"></img>
	  <div class='description'>
		<!-- description content -->
		<p class='description_content'>INFINITY TUTORIALS</p>
		<!-- end description content -->
	   </div>
	  </div>
	 <div class="con">
	  <div class="cn">
	  <h6><i><b>CONTACT</b>
	  <p>HARSHA K</p>
	  <p>DEPT. INFORMATION TECHNOLOGY</p>
	  <p>NITK,SUARTHKAL-575025</p>
	  <p>15IT211</p></i>
	  </h6>
	  </div>
	 </div>
	 <div class="con">
	  <div class="cn">
	  <h6><i><b>E-Tutor</b>
	  <p>AN &nbspE-LEARNING WEBSITE WHERE TEACHING &nbsp AND LEARNING PROCESS IS MADE EASIER.</i></p>
	  <a href="feedback.php" style="float:right;margin-right:10px;margin-top:5px;"> FEEDBACK </a></br>
	  </h6>
	  </div>
	  </div>
	 </div>
	</div>
   </div>
   </div>
</body>
</html>
