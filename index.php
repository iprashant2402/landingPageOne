<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script src="js/index.js" type="text/javascript"></script>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
body, html {
    height: 100%;
    line-height: 1.8;
}
/* Full height image header */
.bgimg-1 {
    background-position: center;
    background-size: cover;
    background-image: url("asce-website/homeback2.jpg");
    min-height: 100%;
}
.w3-bar .w3-button {
    padding: 16px;
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="#home" class="w3-bar-item w3-button w3-wide"><img src="asce-website/ciatlogo.jpg" height="20px"/></a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="#about" class="w3-bar-item w3-button">ABOUT</a>
      <a href="#team" class="w3-bar-item w3-button"><!--i class="fa fa-user"></i--> SPEAKERS</a>
      <a href="#work" class="w3-bar-item w3-button"><!--i class="fa fa-th"></i--> ACCOMODATION</a>
      <a href="#pricing" class="w3-bar-item w3-button"><!--i class="fa fa-usd"></i--> PRICING</a>
      <a href="#contact" class="w3-bar-item w3-button"><!--i class="fa fa-envelope"></i--> CONTACT</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
  <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">SPEAKERS</a>
  <a href="#work" onclick="w3_close()" class="w3-bar-item w3-button">ACCOMODATION</a>
  <a href="#pricing" onclick="w3_close()" class="w3-bar-item w3-button">PRICING</a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-left w3-text-white" style="padding:48px">
    <div class="title">
      <div class="dynamic-title cd-headline clip is-full-width">
        <span>COME AND WITNESS&nbsp;</span><br>
        <span class="cd-words-wrapper">

          <b class="is-visible"> &nbsp;<span class="gold-title">Architectural Technologies.</span></b>
                    <b> &nbsp;<span class="gold-title">BIM Technologies.</span></b>
          <b>&nbsp;<span class="gold-title">CIAT Conference 2018.</span></b>
                    <!--b>an&nbsp;<span class="gold-title">Artist.</span></b>
                    <b>a&nbsp;<span class="gold-title">Humanitarian.</span></b-->

        </span>
      </div>
  
  
    </div>

<p><a href="#about" class="w3-button w3-purple w3-padding-large w3-large w3-margin-top ">REGISTER NOW</a></p>
  </div> 
  <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
</header>


<!-- Promo Section - "We know design" -->
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="about">
  <div class="w3-row-padding">
    <div class="w3-col m6">
      <h3>ABOUT THE WORKSHOP</h3>
      <p>This workshop aims to provide a platform comprising of talks and interactive
sessions by educational and industrial experts from various countries to imbue
the knowledge in the field of Architectural Technology. This will help to outlook
conventional practices in the design process of construction and integrate them
with the technologies and its applications to produce efficient and effective
solutions.</p>
      <p><a href="#home" class="w3-button w3-purple">REGISTER NOW</a></p>
    </div>
    <div class="w3-col m6">
      <img class="w3-image w3-round-large" src="/asce-website/aboutworkshop.jpg" alt="Buildings" width="700" height="394">
    </div>
  </div>
</div>

<!-- Team Section -->
<div class="w3-container" style="padding:128px 16px" id="team">
  <h3 class="w3-center">WHO's SPEAKING</h3>
  <p class="w3-center w3-large">Our dedicated and remarkable Speakers!</p>
  <div class="w3-row-padding w3-grayscale" style="margin-top:64px">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="/asce-website/speaker1.jpg" alt="Speaker1" style="width:100%">
        <div class="w3-container">
          <h3>John Doe</h3>
          <p class="w3-opacity">CEO & Founder</p>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="/asce-website/speaker2.jpg" alt="Jane" style="width:100%">
        <div class="w3-container">
          <h3>Anja Doe</h3>
          <p class="w3-opacity">Art Director</p>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="/asce-website/speaker3.jpg" alt="Mike" style="width:100%">
        <div class="w3-container">
          <h3>Mike Ross</h3>
          <p class="w3-opacity">Web Designer</p>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="/asce-website/speaker1.jpg" alt="Dan" style="width:100%">
        <div class="w3-container">
          <h3>Dan Star</h3>
          <p class="w3-opacity">Designer</p>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Work Section -->
<div class="w3-container" style="padding:128px 16px" id="work">
  <h3 class="w3-center">SUGGESTED ACCOMODATION</h3>
  <p class="w3-center w3-large">Hotels that we recommend</p>

  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-col l3 m6">
      <img src="https://imgcy.trivago.com/c_limit,d_dummy.jpeg,f_auto,h_470,q_auto,w_805/partnerimages/14/32/143256964.jpeg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Regency Sameera Vellore"><br>
      <p><b>Regency Sameera Vellore</b></p>
    </div>
    <div class="w3-col l3 m6">
      <img src="https://imgcy.trivago.com/c_limit,d_dummy.jpeg,f_auto,h_470,q_auto,w_805/partnerimages/20/11/201198082.jpeg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Khanna Fiesta"><br>
      <p><b>Khanna Fiesta</b></p>
    </div>
    <div class="w3-col l3 m6">
      <img src="https://imgcy.trivago.com/c_limit,d_dummy.jpeg,f_auto,h_470,q_auto,w_805/uploadimages/30/80/30808446.jpeg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Hotel Kingsbury"><br>
      <p><b>Hotel Kingsbury</b></p>
    </div>
    <div class="w3-col l3 m6">
      <img src="https://imgcy.trivago.com/c_limit,d_dummy.jpeg,f_auto,h_470,q_auto,w_805/uploadimages/18/58/18580428.jpeg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Rangalaya Royal"><br>
      <p><b>Rangalaya Royal</b></p>
    </div>
  </div>

  <div class="w3-row-padding w3-section">
    <div class="w3-col l3 m6">
      <img src="https://imgcy.trivago.com/c_limit,d_dummy.jpeg,f_auto,h_470,q_auto,w_805/partnerimages/32/27/322792178.jpeg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="FabHotel Blossoms"><br>
      <p><b>FabHotel Blossoms</b></p>
    </div>
    <div class="w3-col l3 m6">
      <img src="https://imgcy.trivago.com/c_limit,d_dummy.jpeg,f_auto,h_470,q_auto,w_805/partnerimages/30/13/301391810.jpeg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Neha Residency"><br>
      <p><b>Neha Residency</b></p>
    </div>
    <div class="w3-col l3 m6">
      <img src="https://imgcy.trivago.com/c_limit,d_dummy.jpeg,f_auto,h_470,q_auto,w_805/partnerimages/14/11/141134244.jpeg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Hilton Residency">
      <p><b>Hilton Residency</b></p>
    </div>
    <div class="w3-col l3 m6">
      <img src="https://imgcy.trivago.com/c_limit,d_dummy.jpeg,f_auto,h_470,q_auto,w_805/partnerimages/14/13/141391658.jpeg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Hyatt Residency"><br>
      <p><b>Hyatt Residency</b></p>
    </div>
  </div>
</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>


<!-- Pricing Section -->

<!-- Contact Section -->
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
  <h3 class="w3-center">CONTACT</h3>
  <p class="w3-center w3-large">Lets get in touch. Send us a message:</p>
  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-half">
      <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> Chicago, US</p>
      <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: +00 151515</p>
      <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: mail@mail.com</p>
      <br>
      <form action="/action_page.php" target="_blank">
        <p><input class="w3-input w3-border" type="text" placeholder="Name" required name="Name"></p>
        <p><input class="w3-input w3-border" type="text" placeholder="Email" required name="Email"></p>
        <p><input class="w3-input w3-border" type="text" placeholder="Subject" required name="Subject"></p>
        <p><input class="w3-input w3-border" type="text" placeholder="Message" required name="Message"></p>
        <p>
          <button class="w3-button w3-black" type="submit">
            <i class="fa fa-paper-plane"></i> SEND MESSAGE
          </button>
        </p>
      </form>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  <p>Copyright 2018. ASCE VIT</p>
</footer>
 
<!-- Add Google Maps -->
<script>
function myMap()
{
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
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

</body>
</html>
