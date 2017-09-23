# Home-Control-ESP-MQTT
Basic home applience control project with web-intrface, ESP8266 and RF 433 Mhz modules, i.e. relays, light switches, etc.
The back end of web intrface is written using PHP, JQuery and JavaScript and W3CSS for the front-end design. 
Basically this is a web page, with buttons and switches, which allow to control ligths and sockets. Communication between modules achieved 
using MQTT messaging. RF 433Mhz modules controlled using ESP Witty Cloud module and RF transmitter module.
Since recent this project works with Domoticz home automation application, which in turn gives an access to Xiaomi smart home modules. This became possible by using "MQTT client" extension enabled in Domoticz system. MQTT client connects to the same MQTT server that Home-Control system is connected, what in turn allows message exchange between 2 systems.

Regards,

Yuri
