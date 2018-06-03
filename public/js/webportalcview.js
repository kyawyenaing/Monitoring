var j;
var cvarray= [];
var socket=io.connect('http://127.0.0.1:3300');
socket.on('webportal-*:App\\Events\\WebportalCviewEvent',function(message){
 
	 var msg = message.data; 
     
 
    for (j=0; j<msg.length; j++) {
        document.getElementById('cv_chart').innerHTML = "";
        var cvdata = JSON.parse(msg[j]);
        var tt = parseInt(cvdata.val);
        console.log(tt);
        cvarray.push([cvdata.labeltime,cvdata.val]);
          
        function drawChart() {

            var data = google.visualization.arrayToDataTable(cvarray);
            var options = {'title':'User View in 7 days', 'width':1100, 'height':400};
            
            var chart = new google.visualization.LineChart(document.getElementById('cv_chart'));
            chart.draw(data, options);
        }
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
    }


});

