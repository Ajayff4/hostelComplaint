<?php
  session_start();
  $user = $_SESSION['username'];
  echo "<script>alert('<?php echo".$user."; ?>');</script>";
?>

<!DOCTYPE html>
<html>
<title> Hostal complaint System</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}


/************************contact us scroll******************************/
html {
  scroll-behavior: smooth;
}

#section2 {
  height: 400px;
}
/**********************************************************************/


/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("5.jpg");
  min-height: 100%;
}

.w3-bar .w3-button {
  padding: 16px;
}
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: DarkSlateGray;
   color: white;
   text-align: center;
}
@import url(https://fonts.googleapis.com/css?family=Sniglet|Raleway:900);


body, html{
	height: 100%;
	padding: 0;
	margin: 0;
	font-family: 'Sniglet', cursive;
}
h1{
	font-weight: normal;
	font-size: 4em;
	font-family: 'Raleway', sans-serif;
	margin: 0 auto;
	margin-top: 30px;
	width: 500px;
	color: #F90;
	text-align: center;

}

/* Animation webkit */
@-webkit-keyframes myfirst
{
	0% {margin-left: -235px}
	90% {margin-left: 100%;}
	100% {margin-left: 100%;}
}

/* Animation */
@keyframes myfirst
{
	0% {margin-left: -235px}
	70% {margin-left: 100%;}
	100% {margin-left: 100%;}
}

.fish{
	background-image: url('http://www.geertjanhendriks.nl/codepen/form/fish.png');
	width: 235px;
	height: 104px;
	margin-left: -235px;
	position: absolute;	
	animation: myfirst 24s;
	-webkit-animation: myfirst 24s;
	animation-iteration-count: infinite;
	-webkit-animation-iteration-count: infinite;
	animation-timing-function: linear;
	-webkit-animation-timing-function: linear;
}

#fish{
	top: 120px;
}

#fish2{
	top: 260px;
	animation-delay: 12s;
	-webkit-animation-delay: 12s;
}


header{
	height: 160px;
	background: url('http://www.geertjanhendriks.nl/codepen/form/golf.png') repeat-x bottom;
}

#form{
	height: 100%;	
	background-color: #98d4f3;
	overflow: hidden;
	position: relative;
	
}
form{
	margin: 0 auto;
	width: 500px;
	padding-top: 40px;
	color: white;
	position: relative;
	
	
}
label, input, textarea{
	display: block;	
}
input, textarea{
	width: 500px;	
	border: none;
	border-radius: 20px;
	outline: none;
	padding: 10px;
	font-family: 'Sniglet', cursive;
	font-size: 1em;
	color: #676767;
	transition: border 0.5s;
	-webkit-transition: border 0.5s;
	-moz-transition: border 0.5s;
	-o-transition: border 0.5s;
	border: solid 3px #98d4f3;	
	-webkit-box-sizing:border-box;
	-moz-box-sizing:border-box;
	box-sizing:border-box;
	
}
input:focus, textarea:focus{
	border: solid 3px #77bde0;	
}

textarea{
	height: 100px;	
	resize: none; 
	overflow: auto;
}
input[type="submit"]{
	background-color: #F90;
	color: white;
	height: 50px;
	cursor: pointer;
	margin-top: 30px;
	font-size: 1.29em;
	font-family: 'Sniglet', cursive;
	-webkit-transition: background-color 0.5s;
	-moz-transition: background-color 0.5s;
	-o-transition: background-color 0.5s;
	transition: background-color 0.5s;
}
input[type="submit"]:hover{
	background-color: #e58f0e;
	
}
label{
	font-size: 1.5em;
	margin-top: 20px;
	padding-left: 20px;
}
/* contact us form code *\
.formgroup, .formgroup-active, .formgroup-error{
	background-repeat: no-repeat;
	background-position: right bottom;
	background-size: 10.5%;
	transition: background-image 0.7s;
	-webkit-transition: background-image 0.7s;
	-moz-transition: background-image 0.7s;
	-o-transition: background-image 0.7s;
	width: 566px;
	padding-top: 2px;
}

.formgroup{
	background-image: url('http://www.geertjanhendriks.nl/codepen/form/pixel.gif');	
}
.formgroup-active{
	background-image: url('http://www.geertjanhendriks.nl/codepen/form/octo.png');
}
.formgroup-error{
	background-image: url('http://www.geertjanhendriks.nl/codepen/form/octo-error.png');
	color: red;
}

</style>
</head>
<body>

<!--Navbar (sit on top)-->

<div class="w3-top">
  <div class="w3-bar w3-blue w3-card" id="myNavbar">
  <a href="#home" class="w3-bar-item w3-button w3-wide"><img src="nitc_logo.png" height=36 width=50></a>

  <div class="w3-right w3-hide-small">
      <a href="#team" class="w3-bar-item w3-button"><i class="fa fa-user" aria-hidden="true"></i> TEAM</a>
      <a href="#work" class="w3-bar-item w3-button"><i class="fa fa-th-large" aria-hidden="true"></i> Gallery</a>
	   <a href="login.html" class="w3-bar-item w3-button"><i class="fa fa-user-plus" aria-hidden="true"></i> Login</a>
	    <a href="#section2" class="w3-bar-item w3-button"><i class="fa fa-address-book" aria-hidden="true"></i> Contact us</a>
		<a href="#about" class="w3-bar-item w3-button"><i class="fa fa-info-circle" aria-hidden="true"></i> ABOUT</a>
		 <a href="#FAQ"  class="w3-bar-item w3-button"><i class="fa fa-question-circle" aria-hidden="true"></i> FAQ</a>
    </div>	
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-blue w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">TEAM</a>
  <a href="#Gallery" onclick="w3_close()" class="w3-bar-item w3-button">Gallery</a>
  <a href="#Login/SignUp" onclick="w3_close()"><i class="fa fa-address-book" aria-hidden="true"></i>Login</a>
  <a href="#Contact us" onclick="w3_close()" class="w3-bar-item w3-button">Contact us</a>
  <a href="#About" onclick="w3_close()" class="w3-bar-item w3-button">About</a>
  <a href="#Faq" onclick="w3_close()" class="w3-bar-item w3-button">FAQ</a>
  
  
</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-left w3-text-white" style="padding:48px">
    <span class="w3-jumbo w3-hide-small">Feel Free To Complain.</span><br>
    <span class="w3-xxlarge w3-hide-large w3-hide-medium">Start something that matters For Change</span><br>
    <p><a href="signup.html" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">SignUp here</a></p>
  </div> 
  
</header>

<!-- About Section -->
<div class="w3-container" style="padding:128px 16px" id="about">
  <h3 class="w3-center">ABOUT THE WEBSITE</h3>
  <p class="w3-center w3-large">Key features of our WEBSITE</p>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-quarter">
      <i class="fa fa-desktop w3-margin-bottom w3-jumbo w3-center"></i>
      <p class="w3-large">Responsive</p>
      <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>-->
    </div>
    <div class="w3-quarter">
      <i class="fa fa-heart w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Passion</p>
     <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>-->
    </div>
    <div class="w3-quarter">
      <i class="fa fa-diamond w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Design</p>
    <!--  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>-->
    </div>
    <div class="w3-quarter">
      <i class="fa fa-cog w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Support</p>
      <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>-->
	  
	  </div>
	  </div>
	  </div>
	  
	  

	  <!-- Promo Section - "We know design" -->
	  
<div class="w3-container w3-light-grey" style="padding:128px 16px">
  <div class="w3-row-padding">
    <div class="w3-col m6">
      <h3>What We Do.</h3>
      <p>A Plateform We Provide For Easy Solution<br>All Types of Complaint Are Accepted Related To Hostel.</p>
      <p><a href="#work" class="w3-button w3-black"><i class="fa fa-th"> </i> What You Can Do</a></p>
    </div>
    <div class="w3-col m6">
      <img class="w3-image w3-round-large" src="1.jpg" alt="Buildings" width="700" height="394">
    </div>
  </div>
</div>

<!-- Team Section -->

<div class="w3-container" style="padding:128px 16px" id="team">
  <h3 class="w3-center">OUR Developer</h3>
  <p class="w3-center w3-large">The ones who runs this company</p>
  <div class="w3-row-padding " style="margin-top:64px">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="222.jpg" alt="BSKNATH" style="width:100%">
        <div class="w3-container">
          <h3>BASUKI NATH</h3>
          <p class="w3-opacity">SOFTWARE DEVELOPER</p>
         <!-- <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>-->
          <p><button class="w3-button w3-blue w3-block"><i class="fa fa-envelope"></i> bsknath@gmail.com</button></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="manish.jpg" alt="mskkumar" style="width:100%">
        <div class="w3-container">
          <h3>MANISH KUMAR</h3>
          <p class="w3-opacity">SOFTWARE DEVELOPER</p>
          <!--<p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>-->
          <p><button class="w3-button w3-blue w3-block"><i class="fa fa-envelope"></i> manish11414@gmail.com </button></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="ajay.jpg" alt="ajax" style="width:100%">
        <div class="w3-container">
          <h3>AJAY AGRAWAL</h3>
          <p class="w3-opacity">WEB DESIGNER</p>
          <!--<p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>-->
          <p><button class="w3-button w3-blue w3-block"><i class="fa fa-envelope"></i> Ajayff4@gmail.com </button></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="Gyanu.jpg" alt="Gyan" style="width:100%">
        <div class="w3-container">
          <h3>GYANENDRA </h3>
          <p class="w3-opacity">WEB DESIGNER</p>
         <!-- <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>-->
          <p><button class="w3-button w3-blue w3-block"><i class="fa fa-envelope"></i> vishwakarma26694@gmail.com</button></p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Promo Section "Statistics" -->
<div class="w3-container w3-row w3-center w3-blue w3-padding-64">
  <div class="w3-quarter">
    <span class="w3-xxlarge">15+</span>
    <br>Partners
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">200+</span>
    <br>complaint solve
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">450+</span>
    <br>Happy Clients
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">350+</span>
    <br>Meetings
  </div>
</div>

<!-- Work Section -->
<div class="w3-container" style="padding:128px 16px" id="work">
  <h3 class="w3-center">GALLERY</h3>
  <p class="w3-center w3-large">What we've done for people</p>

  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-col l3 m6">
      <img src="14.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A microphone">
    </div>
    <div class="w3-col l3 m6">
      <img src="18.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A phone">
    </div>
    <div class="w3-col l3 m6">
      <img src="13.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A drone">
    </div>
    <div class="w3-col l3 m6">
      <img src="14.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Soundbox">
    </div>
  </div>

  <div class="w3-row-padding w3-section">
    <div class="w3-col l3 m6">
      <img src="13.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A tablet">
    </div>
    <div class="w3-col l3 m6">
      <img src="14.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A camera">
    </div>
    <div class="w3-col l3 m6">
      <img src="17.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A typewriter">
    </div>
    <div class="w3-col l3 m6">
      <img src="18.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A tableturner">
    </div>
  </div>
</div>

<!--    contact us section   -->
<div class="main" id="section2">



<header>
	<h1>Contact us</h1>
</header>

<div id="form">

<div class="fish" id="fish"></div>
<div class="fish" id="fish2"></div>

<form id="waterform" method="post">

<div class="formgroup" id="name-form">
    <label for="name">Your name*</label>
    <input type="text" id="name" name="name" />
</div>

<div class="formgroup" id="email-form">
    <label for="email">Your e-mail*</label>
    <input type="email" id="email" name="email" />
</div>

<div class="formgroup" id="message-form">
    <label for="message">Your message</label>
    <textarea id="message" name="message"></textarea>
</div>

	<input type="submit" value="Send your message!" />
</form>
</div>
<!-- Footer -->
<div class="footer">
  <p>© Copyright 2019 NIT Calicut. All Rights Reserved</p>
</div>
</footer>
 </div><!--div for contact us scroll---->
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button

function w3_close() {
    mySidebar.style.display = "none";
}

<!--  contact us section -->



$('document').ready(function(){
	$('input[type="text"], input[type="email"], textarea').focus(function(){
		var background = $(this).attr('id');
		$('#' + background + '-form').addClass('formgroup-active');
		$('#' + background + '-form').removeClass('formgroup-error');
	});
	$('input[type="text"], input[type="email"], textarea').blur(function(){
		var background = $(this).attr('id');
		$('#' + background + '-form').removeClass('formgroup-active');
	});

function errorfield(field){
	$(field).addClass('formgroup-error');
	console.log(field);	
}

$("#waterform").submit(function() {
	var stopsubmit = false;

if($('#name').val() == "") {
	errorfield('#name-form');
	stopsubmit=true;
}
if($('#email').val() == "") {
	errorfield('#email-form');
	stopsubmit=true;
}
  if(stopsubmit) return false;
});
		
});


</script>
</body>
</html>