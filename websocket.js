// called when the client connects
function onConnect() {
          // Once a connection has been made, make a subscription and send a message.
          console.log("onConnect");
          client.subscribe("#");
          $('#error').html("Connected to CloudMQTT");
}

        // called when the client loses its connection
        function onConnectionLost(responseObject) {
          if (responseObject.errorCode !== 0) {
            console.log("onConnectionLost:", responseObject.errorMessage);
            setTimeout(function() { client.connect() }, 5000);
          }
        }

        // called when a message arrives



function onFailure(invocationContext, errorCode, errorMessage) {
          var errDiv = document.getElementById("error");
          errDiv.textContent = "Could not connect to WebSocket server, most likely you're behind a firewall that doesn't allow outgoing connections to port 36952";
          errDiv.style.display = "block";
        }

        var clientId = "esp8266-5c:cf:7f:85:e2:de-2a";
        // Create a client instance
        var client = new Paho.MQTT.Client("m12.cloudmqtt.com", 33882, clientId);

        // set callback handlers
        client.onConnectionLost = onConnectionLost;
        client.onMessageArrived = onMessage;

        // connect the client using secure login
        client.connect({
          useSSL: true,
          userName: "dfdsfsfsdf",         //username from  CloudMQTT.com
          password: "5435gdft345tt",     //CloudMQTT.com given password
          onSuccess: onConnect,
          onFailure: onFailure

 });

function loudMqtt(){
if(document.getElementById('worktop').checked) {

          message = new Paho.MQTT.Message("1");
          message.destinationName = "sonoff/relay";
          client.send(message);

}
else{

         message = new Paho.MQTT.Message("0");
         message.destinationName = "sonoff/relay";
         client.send(message);
}
}

