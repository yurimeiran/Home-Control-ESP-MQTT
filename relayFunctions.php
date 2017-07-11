<?php


require("phpMQTT/phpMQTT.php");

$fnctn = $_POST['post'];

$mqtt = new phpMQTT("localhost", 1883, "broker-192.168.1.75"); //Change client name to something unique
if ($mqtt->connect()) {




if($fnctn == "Light On")
{
	echo $fnctn;
}

if ($fnctn == "lock")
 {
	 exec("sudo python /home/pi/unlock.py");
	 echo "DOOR LOCKED";
}
if ($fnctn == "unlock") { exec("sudo python /home/pi/lock.py");

echo "DOOR UNLOCKED";
}

if ($fnctn == "on") { exec ("sudo python /home/pi/unlock1.py");
echo "light on";
}

if ($fnctn == "off") { exec ("sudo python /home/pi/lock1.py");
echo "light off";

}

if ($fnctn == "high") { exec ('mosquitto_pub -d -t sonoff/relay -m "1" ');
echo "Relay On";

}

if ($fnctn == "low") { exec ('mosquitto_pub -d -t sonoff/relay -m "0" ');
echo "Relay Off";

}

if ($fnctn == "high1") { exec ('mosquitto_pub -d -t /ESP_Relay/Relay1 -m "1" ');
echo "Relay On";

}

if ($fnctn == "low1") { exec ('mosquitto_pub -d -t /ESP_Relay/Relay1 -m "0" ');
echo "Relay Off";

}

//*************************socket1 sitting room ***************************************
if ($fnctn == "sw1-on") {

$mqtt->publish("RF_Socket/Socket1","1",1);
$mqtt->close();
}

if ($fnctn == "sw1-off") {

$mqtt->publish("RF_Socket/Socket1","2",1);
$mqtt->close();
}
//*************************************************************************************

//************************socket2 sitting room ****************************************
if ($fnctn == "sw2-on") {

$mqtt->publish("RF_Socket/Socket1","3",1);
$mqtt->close();
}

if ($fnctn == "sw2-off") {

$mqtt->publish("RF_Socket/Socket1","4",1);
$mqtt->close();
}
//*************************************************************************************

//*************night lamp kids b_room**************************************************
if ($fnctn == "sw3-on") { 

$mqtt->publish("RF_Socket/Socket1","5",1);
$mqtt->close();
echo "Socket On";
}

if ($fnctn == "sw3-off") { 

$mqtt->publish("RF_Socket/Socket1","6",1);
$mqtt->close();
echo "Socket Off";
}
//*************************************************************************************

//***********************kids b_room tv socket*****************************************
if ($fnctn == "sw4-on") { 

$mqtt->publish("RF_Socket/Socket1","7",1);
$mqtt->close();
}

if ($fnctn == "sw4-off") {

$mqtt->publish("RF_Socket/Socket1","8",1);
$mqtt->close();
}
//**************************************************************************************
if ($fnctn == "all-on") { exec ('mosquitto_pub -d -t RF_Socket/Socket1 -m "9" ');
echo "Socket On";

}

if ($fnctn == "all-off") { exec ('mosquitto_pub -d -t RF_Socket/Socket1 -m "A" ');
echo "Socket Off";

}

//******************************kitchen light*****************************************
if ($fnctn == "k1") { 

$mqtt->publish("LIGHTS/Kitchen_main","B",1);
$mqtt->close();
echo "On"; 
}

if ($fnctn == "k2") { 

$mqtt->publish("LIGHTS/Kitchen_main","M",1);
$mqtt->close();
echo "Off";  
}
//************************************************************************************

//***************************Corridor ambient led*************************************
if ($fnctn == "on-1") {

$mqtt->publish("LIGHTS/Ambient_led","C",1);
$mqtt->close();
}

if ($fnctn == "off-1") { 

$mqtt->publish("LIGHTS/Ambient_led","D",1);
$mqtt->close();
}
//************************************************************************************

//***************************Sitting room low light **********************************
if ($fnctn == "on-2") {

$mqtt->publish("LIGHTS/Living","E",1);
$mqtt->close();
}

if ($fnctn == "off-2") {

$mqtt->publish("LIGHTS/Living","F",1);
$mqtt->close();
}
//************************************************************************************

//**************************Sitting main light****************************************
if ($fnctn == "l1") {

$mqtt->publish("LIGHTS/Living","G",1);
$mqtt->close();
}

if ($fnctn == "l2") {

$mqtt->publish("LIGHTS/Living","H",1);
$mqtt->close();
}
//***********************************************************************************

if ($fnctn == "on-4")
 { 
	exec ('mosquitto_pub -d -t LIGHTS/Living -m "G" '); 
	exec ('mosquitto_pub -d -t LIGHTS/Living -m "E" ');
	exec ('mosquitto_pub -d -t LIGHTS/Living -m "B" ');
echo "test On";

}

if ($fnctn == "off-4") 
 { 
	exec ('mosquitto_pub -d -t LIGHTS/Living -m "H" '); 
	exec ('mosquitto_pub -d -t LIGHTS/Living -m "F" ');
	exec ('mosquitto_pub -d -t LIGHTS/Living -m "M" ');
echo "test Off";

}

if ($fnctn == "on-5") { 


$mqtt->publish("RF_Socket/Socket1","5",0);
$mqtt->close();



//exec ('mosquitto_pub -d -t LIGHTS/Living -m "K" ');
//echo "On";

}

if ($fnctn == "off-5") { 

//if ($mqtt->connect()){
$mqtt->publish("RF_Socket/Socket1","6",0);
$mqtt->close();
//}



exec ('mosquitto_pub -d -t LIGHTS/Living -m "L" ');
echo "Off";

}

if ($fnctn == "kb-on") { exec ('mosquitto_pub -d -t /sonoff/relay/light/kids_bedroom -m "1" ');
echo "On";

}

if ($fnctn == "kb-off") { exec ('mosquitto_pub -d -t /sonoff/relay/light/kids_bedroom -m "0" ');
echo "Off";

}


}//end of main function on connect
?>
