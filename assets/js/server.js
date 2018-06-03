var arr = [];
var server_name;
var element;
var new_cpu,i,aa,k,l,x,m, new_array=[];
var msg=[];
 
 
var socket = io.connect('http://127.0.0.1:3000');
socket.on('server-channel:App\\Events\\ServerEvent', function(message) {

    msg = message.data;

    for (m=0; m<msg.length; m++) {
        var serverdata = JSON.parse(msg[m]);

        socket.emit('status added',serverdata);

        var addNewElement = function(arr, newElement) {
                 var found = false;
                 var element;
                 for(i=0; element=arr[i]; i++) {
                     if(element.servername == newElement.servername) {
                         found = true;
                         arr[i] = newElement;
                     }
                 }
                 if(found === false) {
                     arr.push(newElement);
                 }
                 var newArr = [];
                 for(var i=0; element=arr[i]; i++) {
                     if(element !== false) newArr.push(element);
        }
                 return newArr;
             };
            arr = addNewElement(arr, serverdata);
            document.getElementById("arr").innerHTML ="";
            for (i=0; i<arr.length; i++) {

                var memo = (arr[i].used_memory / arr[i].total_memory) * 100;
                var memory = Math.round(memo);
                var used_m = arr[i].used_memory;
                var used_memory = parseFloat(used_m).toFixed(2);
                var total_memo = arr[i].total_memory;
                var total_memory = parseFloat(total_memo).toFixed(2);
                var num = arr[i].cpu;
                var cpu = Math.round(num);
                if (cpu > 50) {
                    var progress = "progress-circle over50 p";
                }
                else {
                    progress = "progress-circle p";
                }
                if (memory > 50) {
                    var prog_memo = "progress-circle over50 p";
                }
                else {
                    prog_memo = "progress-circle p";
                }

                 document.getElementById("arr").innerHTML += "<div class=\"col-lg-4 col-md-4 grid-1-5\"><h3 id=\"server_name\">" +arr[i].servername + "</h3><p class=\"ip\">"+ arr[i].serverip +"</p><div class=\"col-xs-4\"><p class=\"cpu_title\">CPU</p><div class=\""+ progress + cpu +"\"><span id=\"server_cpu\">" + cpu+ "%</span><div class=\"left-half-clipper\"><div class=\"first50-bar\"></div><div class=\"value-bar\"></div></div></div></div><div class=\"col-xs-4\"><p class=\"cpu_title\">CPU</p><div class=\""+ progress + cpu +"\"><span id=\"server_cpu\">" + cpu+ "%</span><div class=\"left-half-clipper\"><div class=\"first50-bar\"></div><div class=\"value-bar\"></div></div></div></div><div class=\"col-xs-4\"><p class=\"memory_title\">Memory</p><div class=\"" + prog_memo + memory +"\" ><span>"+ memory +"%</span><div class=\"left-half-clipper\"><div class=\"first50-bar\"></div><div class=\"value-bar\"></div></div></div><span class='memo'>" +  used_memory  + "Gb of "+ total_memory + " Gb</span></div><a href='server/"+arr[i].servername+"' class=\"view_button\">View</a> </div>";
             }

    }

});


