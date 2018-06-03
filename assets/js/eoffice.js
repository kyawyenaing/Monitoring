$(document).ready(function () {
   	$('#start_date').datepicker({
   		autoclose: true,
   		todayHighlight: true
   	})
   	$('#end_date').datepicker({
   		autoclose: true,
   		todayHighlight: true
   	})

   });

    
var socket = io.connect('http://127.0.0.1:3030');
 
socket.on('eoffice-*:App\\Events\\EofficeLoginEvent', function(message){
    var eofficemsg = message.data;
    var eofficedata = JSON.parse(eofficemsg);
    
    document.getElementById("office-login").innerHTML = eofficedata.e_login;
   
});

