var i;
var ploginarray= [];
var socket=io.connect('http://127.0.0.1:3300');
socket.on('webportal-*:App\\Events\\WebportalPublicloginEvent',function(message){
   
	var msg = message.data;
	 
    for (i=0; i<msg.length; i++) {
        document.getElementById('plogin_chart').innerHTML = "";
        var plogindata = JSON.parse(msg[i]);
        ploginarray.push([plogindata.labeltime,plogindata.val]);
        function drawChart() {

            var data = google.visualization.arrayToDataTable(ploginarray);
            var options = {'title':'Analysis of Public Login Users in 7 days', 'width':1100, 'height':400};
            
            var chart = new google.visualization.LineChart(document.getElementById('plogin_chart'));
            chart.draw(data, options);
        }
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
    }

});

