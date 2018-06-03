
var socket=io.connect('http://127.0.0.1:3300');
socket.on('webportal-*:App\\Events\\WebportalAdminEvent', function(message) {
 
    var msg = message.data;
      
    var webportaladm = JSON.parse(msg);
    var aa =webportaladm.c_admin;
    
    console.log(aa);

    document.getElementById("cdept").innerHTML = webportaladm.c_dept;
    document.getElementById("cadmin").innerHTML = webportaladm.c_admin;
   
});