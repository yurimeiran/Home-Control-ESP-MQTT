<?php

session_start();
//this is when database connection will work

if(!isset($_SESSION['UserData']['Username'])){
        header("location:login.php");
exit;}


?>

<!html>
<head>
<title>Home Control</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!-- ************** allow websocket connection ******************* -->
 <script src="mqtt_websocket/mqttws31.js" type="text/javascript"></script>
 <script src="mqtt_websocket/jquery.min.js" type="text/javascript"></script>
 <script src="mqtt_websocket/config.js" type="text/javascript"></script>
 <script src="mqtt_websocket/websocket.js" type="text/javascript"></script>
<!-- ************************************************************* -->

<script src="scripts1/rf.js" type="text/javascript"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="scripts1/datetime.js"></script>

<!--  <script src='https://api.cloudmqtt.com/sso/js/mqttws31.js' type='text/javascript'></script> 
    <script src="scripts1/websocket.js"></script> 
    <script src="scripts1/cloudmqtt.js"></script>-->
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet"> 
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"> </script> 
<link href="scripts1/style.css" rel="stylesheet"> 
<script src="scripts1/functions.js"></script>
<style> 
body { background-image: url(''); background-repeat: no-repeat; background-color: ;} .logo {font-size: 20px;} .w3-card {margin: 10px; padding: 5px; float:; 
height;} a:link {text-decoration: none;} a:hover {text-decoration: lightgreen;} #messages,#messages1,#temp_living,#temp_kids,#temp_bedroom {color: green;} #image {margin:10px;}
#camera { max-width: 100%;}
</style>

</head>

<body>

<nav class="w3-sidenav w3-white w3-animate-left w3-xlarge" style="display:none;z-index:5;width:250px" id="mySidenav">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-closenav w3-xlarge w3-blue">Close &times;</a>
<!--<?php

	echo "Hi, ".$_SESSION['Username'];

	?> --> 
  <a href="webUI.php">Home <span> <i class="fa fa-home"></i></span></a>
  <a href="rooms.php">Rooms <i class="fa fa-bed"></i></a>
  <a href="#">Services <i class="fa fa-thermometer-empty"></i></a>
  <a href="#">Add device <i class="fa fa-plus"></i></a>
  <a href="blackDesign.php">Black design <i class="fa fa-paint-brush"></i></a>
  <a href="logout.php">Sign out <i class="fa fa-sign-out"></i></a>
  <div style="color: green;"></div>
</nav>

<div class="w3-overlay w3-animate-opacity" onclick="w3_close();" style="cursor:pointer" id="myOverlay"></div>

<div class="w3-container w3-blue w3-text-white " >
  <span class="w3-opennav w3-xxlarge" onclick="w3_open();">&#9776;</span><span class="logo"> Home control</span>
</div>

<div class="w3-container  w3-blue ">
<span id="clockbox" style="padding-right: 40px"> </span>&nbsp;
<i class="fa fa-cloud" aria-hidden="true"></i>
<span id="message">Loading weather data..</span>
</div>


<!-- <div class="w3-container"> -->
  <!--<h3>Rooms    <span><i class="fa fa-bed"></i> </span></h3> -->
<!-- section for kitchen -->
<div class="w3-bar w3-text-blue w3-large">
 
 <button class="w3-bar-item w3-button" onclick="openRoom('Kitchen')">Kitchen</button>
  <button class="w3-bar-item w3-button" onclick="openRoom('Sitting')">Sitting</button>
  <button class="w3-bar-item w3-button" onclick="openRoom('Bedroom')">Bedroom</button>
  <button class="w3-bar-item w3-button" onclick="openRoom('Corridor')">Corridor</button>
  <button class="w3-bar-item w3-button" onclick="openRoom('Kids')">Kids' room</button>

</div>


<div id="Kitchen" class="w3-container w3-light-gray room">
<h4>Kitchen <span><i class="fa fa-cutlery"></i></span></h4>

<div id="left" class="w3-container" style="width:55%; float: left;">
<label><h5><span id="messages">Temperature</span></h5></label>
<label><h5><span id="messages1">Humidity</span></h5></label>

<h5 style="padding-right: 30px">Main light &nbsp;<span>
<label class="switch">
  <input type="checkbox" id="kitchen" onclick="kitchen()">
  <div class="slider round" id=""></div>
</label></span></h5>

<h5>Worktop light &nbsp;<span>
<label class="switch">
  <input type="checkbox" id="worktop" onclick="wtop()">
  <div class="slider round"></div>
</label></span></h5></div>

<div id="right" class="w3-container" style="float: left; width:45%;">

<h5>Socket 1 &nbsp;<span>
<label class="switch">
  <input type="checkbox" id="sock1_k" style="padding-right: 20px" onclick="socket1_k()">
  <div class="slider round"></div>
</label></span></h5>

<h5>Socket 2 &nbsp;<span>
<label class="switch">
  <input type="checkbox" id="sock2_k" style="padding-right: 20px" onclick="socket2_k()">
  <div class="slider round"></div>
</label></span></h5>



</div>

</div>

<div id="Sitting" class="w3-container w3-light-gray room" style="display:none">

<h4>Sitting Room <span><i class="fa fa-television"></i> </span></h4>

<div id="left" class="w3-container" style="width:55%; float: left;">

<label><h5><span id="temp_living">Temperature: 18.00°C</span></h5></label>
<h5>Main light &nbsp;<span>
<label class="switch">
  <input type="checkbox" id="room1" onclick="room1()">
  <div class="slider round"></div>
</label> </span></h5>

<h5>Low light&nbsp &nbsp;<span>
<label class="switch">
  <input type="checkbox" id="room1_2" onclick="room1_2()">
  <div class="slider round"></div>
</label></span></h5> </div>

<div id="right" class="w3-container" style="float: left; width:45%;">

<h5>Socket 1 &nbsp;<span>
<label class="switch">
  <input type="checkbox" id="sock1_l" style="padding-right: 20px" onclick="socket1_l()">
  <div class="slider round"></div>
</label></span></h5>

<h5>Socket 2 &nbsp;<span>
<label class="switch">
  <input type="checkbox" id="sock2_l" style="padding-right: 20px" onclick="socket2_l()">
  <div class="slider round"></div>
</label></span></h5>

<h5>Socket 3 &nbsp;<span>
<label class="switch">
  <input type="checkbox" id="sock3_l" style="padding-right: 20px" onclick="socket3_l()">
  <div class="slider round"></div>
</label></span></h5>

<br></div>

<!-- video stream from web camera on raspberry pi -->
<img src="http://192.168.1.30:8081" style="max-width:100%; height: auto; margin-bottom: 5px;"> </img>

</div>

<div class="w3-container w3-light-gray room" id="Corridor"  style="display:none">

<h5>Ambient LED &nbsp;<span>
<label class="switch" style="margin-left:2px;">
  <input type="checkbox" id="ambient" onclick="ambient()">
  <div class="slider round"></div>
</label></span></h5>

<h5>Downstairs Light &nbsp;<span>
<label class="switch" style="margin-left:2px;">
  <input type="checkbox" id="ambient" onclick="">
  <div class="slider round"></div>
</label> </span></h5>

<h5>Upstairs Light &nbsp;<span>
<label class="switch" style="margin-left:2px;">
  <input type="checkbox" id="ambient" onclick="">
  <div class="slider round"></div>
</label> </span></h5>

</div>

<div class="w3-container w3-light-gray room" id="Kids" <button class="w3-bar-item w3-button" style="display:none">

<h4>Kids Bedroom <span><i class="material-icons">child_care</i> </span></h4>

<div id="left" class="w3-container" style="width:55%; float: left;">

<label><h5><span id="temp_kids">Temperature: 18.00°C</span></h5></label>
<h5>Main Light &nbsp;<span>
<label class="switch">
  <input type="checkbox" id="k_room" onclick="kids_b()">
  <div class="slider round"></div>
</label></span></h5>

<h5>Night Lamp &nbsp;<span>
<label class="switch">
  <input type="checkbox" id="nightlamp" onclick="nightlamp()">
  <div class="slider round"></div>
</label></span></h5>
</div>

<div id="right" class="w3-container" style="float: left; width:45%;">

<h5>Socket TV &nbsp;<span>
<label class="switch">
  <input type="checkbox" id="socket4" style="padding-right: 20px" onclick="socket4()">
  <div class="slider round"></div>
</label></span></h5></div>

</div>

<div id="Bedroom" class="w3-container w3-light-gray room" style="display:none">

<h4>Master bedroom <span><i class="fa fa-bed"></i> </span></h4>

<div id="left" class="w3-container" style="width:55%; float: left;">

<label><h5><span id="temp_bedroom">Temperature: 18.00°C</span></h5></label>
<h5>Main light &nbsp;<span>
<label class="switch">
  <input type="checkbox" id="b_room" onclick="b_room()">
  <div class="slider round"></div>
</label> </span></h5>

<h5>Socket TV &nbsp &nbsp;<span>
<label class="switch">
  <input type="checkbox" id="socket3" onclick="socket3()">
  <div class="slider round"></div>
</label></span></h5> <br>
</div>

<div id="right" class="w3-container" style="float: left; width:45%;">

<h5>Socket wardrobe &nbsp;<span>
<label class="switch">
  <input type="checkbox" id="" style="padding-right: 20px" onclick="()">
  <div class="slider round"></div>
</label></span></h5></div>

</div>

<script>
function w3_open() {
    document.getElementById("mySidenav").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
function w3_close() {
    document.getElementById("mySidenav").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}



function ki(){
if(document.getElementById('k_room').checked) {

 var post = 'kb-on';
 var dataString = 'post='+post;
 $.ajax ({
   type:"post",
   url: "relayFunctions.php",
   data:dataString,
   cache:false,
   success: function(html){
   $('#test').html(html);
}

  });
 return false;

}

else{

var post = 'kb-off';
 var dataString = 'post='+post;
 $.ajax ({
   type:"post",
   url: "relayFunctions.php",
   data:dataString,
   cache:false,
   success: function(html){
   $('#test').html(html);
}

  });
 return false;

}
}


function openRoom(roomName) {
    var i;
    var x = document.getElementsByClassName("room");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    document.getElementById(roomName).style.display = "block";  
}

</script>
 
</body>
</html>

