<!DOCTYPE html>
<html>
<title>Estate Vr</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}

.btn {
  background: #3498db;
  background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
  background-image: -moz-linear-gradient(top, #3498db, #2980b9);
  background-image: -ms-linear-gradient(top, #3498db, #2980b9);
  background-image: -o-linear-gradient(top, #3498db, #2980b9);
  background-image: linear-gradient(to bottom, #3498db, #2980b9);
  -webkit-border-radius: 10;
  -moz-border-radius: 10;
  border-radius: 10px;
  font-family: Arial;
  color: #ffffff;
  font-size: 20px;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
}

.btn:hover {
  background: #3cb0fd;
  background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
  background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
  text-decoration: none;
}

</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="#vr" class="w3-bar-item w3-button w3-padding-large w3-hide-small">VR</a>
    <a href="#projects" class="w3-bar-item w3-button w3-padding-large w3-hide-small">PROJECTS</a>
    <a href="#review" class="w3-bar-item w3-button w3-padding-large w3-hide-small">USERS</a>
    <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CONTACT</a>

	<div class="w3-dropdown-hover w3-hide-small w3-right">
<button class="w3-padding-large w3-button" title="More">
<i class="fa fa-user-o"></i>
<i class="fa fa-caret-down"></i></button> 
<div class="w3-dropdown-content w3-bar-block w3-card-4">
 <a href="http://localhost:1234/pro/login.php" class="w3-bar-item w3-button">LogIn</a>
        <a href="http://localhost:1234/pro/signup/index1.php" class="w3-bar-item w3-button">Sign Up</a>
		</div>
    </div>

  </div>
 
</div>


<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="#vr" class="w3-bar-item w3-button w3-padding-large">VR</a>
  <a href="#projects" class="w3-bar-item w3-button w3-padding-large">PROJECTS</a>
  <a href="#review" class="w3-bar-item w3-button w3-padding-large">USERS</a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large">CONTACT</a>
</div>

<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

  <!-- Automatic Slideshow Images -->
  <div class="mySlides w3-display-container w3-center">
    <img src="http://localhost:1234/pro/images/banner.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <header><h1>EstateVR</h1></header>
      <p><b>The only all-in-one reality capture system that gives you realistic,<br>interactive 3D and VR experiences that feel as real as being there.</b></p>   
    <a href="http://localhost:1234/pro/videos/video.mp4" class="btn">Experience VR</a>
	</div>
  </div>

  <!-- The Band Section -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="vr">
    <h2 class="w3-wide">Virtual Reality</h2>
    <p class="w3-opacity"><i>The only all-in-one reality capture system that gives you realistic,
interactive 3D and VR experiences that feel as real as being there.	</i></p>
    <p class="w3-justify">Tired of being cheated by real estate websites where you are only able to see the photograph of the house. 
	If so, here we bring you the trust and transparency. 
	We are the team who are ready to show houses through the vr technology where you will be able to see the real condition of house . 
	You can take the virtual tour of your dream house. 
	Suppose in a situation where you are miles away from your dream house but you want to buy that house also you want to visit that house...
	don't worry don't worry we are here to help you. We will make sure you will get the real experience of your house.</p>
    <div class="w3-row w3-padding-32">
      <div class="w3-third">        
        <img src="http://localhost:1234/pro/images/scan.png" class="w3-round w3-margin-bottom" alt="Scan" style="width:60%">
		<p>Scan</p>
      </div>
      <div class="w3-third">
		<img src="http://localhost:1234/pro/images/upload.png" class="w3-round w3-margin-bottom" alt="Upload" style="width:60%">
		<p>Upload</p>
      </div>
      <div class="w3-third">
        <img src="http://localhost:1234/pro/images/share.png" class="w3-round w3-margin-bottom" alt="Share" style="width:60%">
		<p>Share</p>
      </div>
    </div>
  </div>
  
  <!-- Project Section -->
  <div class="w3-container w3-padding-32" id="projects">
    <h3 class="w3-border-bottom w3-center w3-border-light-grey w3-padding-16">Projects</h3>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Summer House</div>
       <a href="http://localhost:1234/pro/videos/sample1.mkv"><img src="http://localhost:1234/pro/images/house5.jpg" alt="House" style="width:100%"></a>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Brick House</div>
        <a href="http://localhost:1234/pro/videos/sample2.mp4"><img src="http://localhost:1234/pro/images/house2.jpg" alt="House" style="width:100%"></a>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Renovated</div>
       <a href="http://localhost:1234/pro/videos/sample3.mp4"> <img src="http://localhost:1234/pro/images/house3.jpg" alt="House" style="width:100%"></a>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom"
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Barn House</div>
        <a href="http://localhost:1234/pro/videos/sample4.mp4"><img src="http://localhost:1234/pro/images/house4.jpg" alt="House" style="width:100%"></a>
      </div>
    </div>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Summer House</div>
        <a href="http://localhost:1234/pro/videos/sample1.mp4"><img src="http://localhost:1234/pro/images/house2.jpg" alt="House" style="width:99%"></a>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Brick House</div>
        <a href="http://localhost:1234/pro/videos/sample2.mp4"><img src="http://localhost:1234/pro/images/house5.jpg" alt="House" style="width:99%"></a>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Renovated</div>
       <a href="http://localhost:1234/pro/videos/sample3.mp4"> <img src="http://localhost:1234/pro/images/house4.jpg" alt="House" style="width:99%"></a>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Barn House</div>
        <a href="http://localhost:1234/pro/videos/sample4.mp4"><img src="http://localhost:1234/pro/images/house3.jpg" alt="House" style="width:99%"></a>
      </div>
    </div>
  </div>

  <!-- Review Section -->
  <div class="w3-black" id="review">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
      <h2 class="w3-wide w3-center">From our Uses</h2>
      <p class="w3-opacity w3-center"><i>When they spoke...</i></p><br>

      <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
        <div class="w3-third w3-margin-bottom">
          <img src="http://localhost:1234/pro/images/pexels-photo-736716.jpeg" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Kevin Ross</b></p>
            <p class="w3-opacity">Fri 18 May 2018</p>
            <p>Great piece of work. Helped me with my selection of new house. Thanks alot guys and keepup the good job.	</p>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="http://localhost:1234/pro/images/beautiful-blur-blurred-background-733872.jpg" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Miranda</b></p>
            <p class="w3-opacity">Sat 24 Feb 2018</p>
            <p>Needed a new workspace and EstateVR has helped me get one in no time. Thanks and keepup the good job.</p>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="http://localhost:1234/pro/images/pexels-photo-373899.jpeg" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Micheal Bay</b></p>
            <p class="w3-opacity">Sun 17 Dec 2017</p>
            <p>Couldn't find the house for my parents by looking at pictures. Then I came across EstateVR, a truely wonderful experience.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- The Contact Section -->
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
    <h2 class="w3-wide w3-center">CONTACT</h2>
    <p class="w3-opacity w3-center"><i>Query? Drop a note!</i></p>
    <div class="w3-row w3-padding-32">
      <div class="w3-col m6 w3-large w3-margin-bottom">
        <i class="fa fa-map-marker" style="width:30px"></i> Chennai, INDIA<br>
        <i class="fa fa-phone" style="width:30px"></i> Phone: (+91)44 26193141<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: estatevr@wind.com<br>
      </div>
      <div class="w3-col m6">
        <form action="contact.php" method="post" target="_blank">
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
            </div>
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
            </div>
          </div>
          <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
          <button class="w3-button w3-black w3-section w3-right" type="submit" name="submit">SEND</button>
        </form>
      </div>
    </div>
  </div>
  
<!-- End Page Content -->
</div>
<!-- Add Google Maps -->
<div id="googleMap" style="height:400px;" class="w3-grayscale-max"></div>
<script>
function myMap() {
  myCenter=new google.maps.LatLng(41.878114, -87.629798);
  var mapOptions= {
    center:myCenter,
    zoom:12, scrollwheel: false, draggable: false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
  <p class="w3-medium">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">WIND</a></p>
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
