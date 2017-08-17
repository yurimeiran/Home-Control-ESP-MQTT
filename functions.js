function on4()
{
 var post = 'on-4';
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

function off4()
{
 var post = 'off-4';
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


	
function sw1()  
{
 var post = 'sw1-on';
 var dataString = 'post='+post;
 $.ajax ({
   type:"post",
   url: "relayFunctions.php",
   data:dataString,
   cache:false,
   success: function(html){
   $('#s').html(html);
}

  });
 return false;

}

function sw2() // 
{
 var post = 'sw1-off';
 var dataString = 'post='+post;
 $.ajax ({
   type:"post",
   url: "relayFunctions.php",
   data:dataString,
   cache:false,
   success: function(html){
   $('#s').html(html);
}

  });
 return false;

}

function sw3()  
{
 var post = 'sw2-on';
 var dataString = 'post='+post;
 $.ajax ({
   type:"post",
   url: "relayFunctions.php",
   data:dataString,
   cache:false,
   success: function(html){
   $('#s').html(html);
}

  });
 return false;

}

function sw4() 
{
 var post = 'sw2-off';
 var dataString = 'post='+post;
 $.ajax ({
   type:"post",
   url: "relayFunctions.php",
   data:dataString,
   cache:false,
   success: function(html){
   $('#s').html(html);
}

  });
 return false;

}

function sw5()
{
 var post = 'sw3-on';
 var dataString = 'post='+post;
 $.ajax ({
   type:"post",
   url: "relayFunctions.php",
   data:dataString,
   cache:false,
   success: function(html){
   $('#s').html(html);
}

  });
 return false;

}

function sw6()
{
 var post = 'sw3-off';
 var dataString = 'post='+post;
 $.ajax ({
   type:"post",
   url: "relayFunctions.php",
   data:dataString,
   cache:false,
   success: function(html){
   $('#s').html(html);
}

  });
 return false;

}

function sw7()
{
 var post = 'sw4-on';
 var dataString = 'post='+post;
 $.ajax ({
   type:"post",
   url: "relayFunctions.php",
   data:dataString,
   cache:false,
   success: function(html){
   $('#s').html(html);
}

  });
 return false;

}

function sw8()
{
 var post = 'sw4-off';
 var dataString = 'post='+post;
 $.ajax ({
   type:"post",
   url: "relayFunctions.php",
   data:dataString,
   cache:false,
   success: function(html){
   $('#s').html(html);
}

  });
 return false;

}

function sw9()
{
 var post = 'all-on';
 var dataString = 'post='+post;
 $.ajax ({
   type:"post",
   url: "relayFunctions.php",
   data:dataString,
   cache:false,
   success: function(html){
   $('#s').html(html);
}

  });
 return false;

}

function sw10()
{
 var post = 'all-off';
 var dataString = 'post='+post;
 $.ajax ({
   type:"post",
   url: "relayFunctions.php",
   data:dataString,
   cache:false,
   success: function(html){
   $('#s').html(html);
}

  });
 return false;

}


function post()
{
 var post = 'lock';
 var dataString = 'post='+post;
 $.ajax ({
   type:"post",
   url: "relayFunctions.php",
   data:dataString,
   cache:false,
   success: function(html){
   $('#door').html(html);
}

  });
 return false;

}

function post1()
{
 var post = 'unlock';
 var dataString = 'post='+post;
 $.ajax ({
   type:"post",
   url: "relayFunctions.php",
   data:dataString,
   cache:false,
   success: function(html){
   $('#door').html(html);
}

  });
 return false;
}

function mqtt()
{
 var post = 'high';
 var dataString = 'post='+post;
 $.ajax ({
   type:"post",
   url: "relayFunctions.php",
   data:dataString,
   cache:false,
   success: function(html){
   $('#door').html(html);
}

  });
 return false;
}

function mqtt1()
{
 var post = 'low';
 var dataString = 'post='+post;
 $.ajax ({
   type:"post",
   url: "relayFunctions.php",
   data:dataString,
   cache:false,
   success: function(html){
   $('#door').html(html);
}

  });
 return false;
}



function doorlock(){
if(document.getElementById('isSelected').checked) {

 var post = "lock";
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

var post = "unlock";
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

//wall unit function slider
function wallunit(){
if(document.getElementById('wallunit').checked) {

var post = "high";
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



}
}

//socket function slider
function socket1(){
if(document.getElementById('socket1').checked || document.getElementById('socket_1').checked) {

 var post = 'sw1-on';
 var dataString = 'post='+post;
 $.ajax ({
   type:"post",
   url: "relayFunctions.php",
   data:dataString,
   cache:false,
   success: function(html){
   $('#response').html(html);
}

  });
 return false;

}
else{

var post = "sw1-off";
 var dataString = 'post='+post;
 $.ajax ({
   type:"post",
   url: "relayFunctions.php",
   data:dataString,
   cache:false,
   success: function(html){
   $('#response').html(html);
}

  });
 return false;

}
}

//socket function slider
function socket2(){
if(document.getElementById('socket2').checked || document.getElementById('socket_2').checked) {

 var post = "sw2-on";
 var dataString = 'post='+post;
 $.ajax ({
   type:"post",
   url: "relayFunctions.php",
   data:dataString,
   cache:false,
   success: function(html){
   $('#response').html(html);
}

  });
 return false;

}

else{

var post = "sw2-off";
 var dataString = 'post='+post;
 $.ajax ({
   type:"post",
   url: "relayFunctions.php",
   data:dataString,
   cache:false,
   success: function(html){
   $('#response').html(html);
}

  });
 return false;

}
}

function kitchen(){

if(document.getElementById('kitchen').checked) {
 var post = "k1";
 var dataString = 'post='+post;
 $.ajax ({
   type:"post",
   url: "relayFunctions.php",
   data:dataString,
   cache:false,
   success: function(html){
   $('#light-status').html(html);
}

  });
 return false;


}
else{

var post = "k2";
 var dataString = 'post='+post;
 $.ajax ({
   type:"post",
   url: "relayFunctions.php",
   data:dataString,
   cache:false,
   success: function(html){
   $('#light-status').html(html);
}

  });
 return false;

}
}

function worktop(){
if(document.getElementById('worktop').checked) {

 var post = 'high';
 var dataString = 'post='+post;
 $.ajax ({
   type:"post",
   url: "relayFunctions.php",
   data:dataString,
   cache:false,
   success: function(html){
   $('#response').html(html);
}

  });
 return false;

}
else{

var post = 'low';
 var dataString = 'post='+post;
 $.ajax ({
   type:"post",
   url: "relayFunctions.php",
   data:dataString,
   cache:false,
   success: function(html){
   $('#response').html(html);
}

  });
 return false;

}
}

function ambient(){
if(document.getElementById('ambient').checked) {

 var post = "on-1";
 var dataString = 'post='+post;
 $.ajax ({
   type:"post",
   url: "relayFunctions.php",
   data:dataString,
   cache:false,
   success: function(html){
   $('#response').html(html);
}

  });
 return false;

}
else{

var post = "off-1";
 var dataString = 'post='+post;
 $.ajax ({
   type:"post",
   url: "relayFunctions.php",
   data:dataString,
   cache:false,
   success: function(html){
   $('#response').html(html);
}

  });
 return false;

}
}


function nightlamp(){
if(document.getElementById('nightlamp').checked) {

 var post = 'sw3-on';
 var dataString = 'post='+post;
 $.ajax ({
   type:"post",
   url: "relayFunctions.php",
   data:dataString,
   cache:false,
   success: function(html){
   $('#response').html(html);
}

  });
 return false;

}
else{

var post = 'sw3-off';
 var dataString = 'post='+post;
 $.ajax ({
   type:"post",
   url: "relayFunctions.php",
   data:dataString,
   cache:false,
   success: function(html){
   $('#response').html(html);
}

  });
 return false;

}
}

function room1_2(){
if(document.getElementById('room1_2').checked) {

 var post = 'on-2';
 var dataString = 'post='+post;
 $.ajax ({
   type:"post",
   url: "relayFunctions.php",
   data:dataString,
   cache:false,
   success: function(html){
   $('#response').html(html);
}

  });
 return false;

}
else{

var post = 'off-2';
 var dataString = 'post='+post;
 $.ajax ({
   type:"post",
   url: "relayFunctions.php",
   data:dataString,
   cache:false,
   success: function(html){
   $('#response').html(html);
}

  });
 return false;

}
}

function room1(){
if(document.getElementById('room1').checked) {

 var post = 'l1';
 var dataString = 'post='+post;
 $.ajax ({
   type:"post",
   url: "relayFunctions.php",
   data:dataString,
   cache:false,
   success: function(html){
   $('#response').html(html);
}

  });
 return false;

}
else{

var post = 'l2';
 var dataString = 'post='+post;
 $.ajax ({
   type:"post",
   url: "relayFunctions.php",
   data:dataString,
   cache:false,
   success: function(html){
   $('#response').html(html);
}

  });
 return false;

}
}

function socket3(){
if(document.getElementById('socket3').checked) {

 var post = 'on-5';
 var dataString = 'post='+post;
 $.ajax ({
   type:"post",
   url: "relayFunctions.php",
   data:dataString,
   cache:false,
   success: function(html){
   $('#response').html(html);
}

  });
 return false;

}
else{

var post = 'off-5';
 var dataString = 'post='+post;
 $.ajax ({
   type:"post",
   url: "relayFunctions.php",
   data:dataString,
   cache:false,
   success: function(html){
   $('#response').html(html);
}

  });
 return false;

}
}


//socket in kids room
function socket4(){
if(document.getElementById('socket4').checked) {

 var post = 'sw4-on';
 var dataString = 'post='+post;
 $.ajax ({
   type:"post",
   url: "relayFunctions.php",
   data:dataString,
   cache:false,
   success: function(html){
   $('#response').html(html);
}

  });
 return false;

}
else{

var post = 'sw4-off';
 var dataString = 'post='+post;
 $.ajax ({
   type:"post",
   url: "relayFunctions.php",
   data:dataString,
   cache:false,
   success: function(html){
   $('#response').html(html);
}

  });
 return false;

}
}


//main light kids bedroom
function ids_b(){
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

