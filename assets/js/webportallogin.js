var socket=io.connect('http://127.0.0.1:3300');
socket.on('webportal-*:App\\Events\\WebportalLoginEvent', function(message) {

    var logmsg = message;
 	 
    var webportallog = JSON.parse(logmsg);
    var aaa=webportallog.c_login;
    console.log(aaa);
     
    document.getElementById("clogin").innerHTML = webportallog.c_login;
   
});
