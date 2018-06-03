var mysql = require('mysql');
var app = require('express')();
var server = require('http').Server(app);
var io = require('socket.io').listen(server);
var Redis = require('ioredis');
var redis = new Redis();
 
var con = mysql.createConnection({
    host: "localhost",
    user: "root",
    password: "",
    database: "api"
});

redis.subscribe("server-channel", function (err, count) {

});

redis.on('message', function (channel, message) {

    console.log(channel, message);
    message = JSON.parse(message);
    io.emit(channel + ':' + message.event, message.data);

    var msg = message.data;

    var mmsg = msg.data;
    var arrname = [];var arrtime=[];
    var x;
    for (var i=0; i<mmsg.length; i++) {

        var ser = JSON.parse(mmsg[i]);
        var ser_name = ser.servername;
        var ser_cpu = ser.cpu;
        var ser_used = ser.used_memory;
        var ser_total = ser.total_memory;
        var ser_ip=ser.serverip;
        var d = new Date();
        var dd = d.toLocaleString();
        var d = new Date(dd),
        month = '' + (d.getMonth() + 1),
        day = '' + d.getDate(),
        year = d.getFullYear();
        hr= d.getHours();
        min = d.getMinutes();

        if (month.length < 2) month = '0' + month;
        if (day.length < 2) day = '0' + day;
        // if (hr.length < 2) hr = '0' + hr;
        // if (min.length < 2) min = '0' + min;

        var datte = [year, month, day].join('-');
        var time = [hr,min].join(':');
        var datetime = [datte, time].join(' ');
        
        con.connect(function(err) {
            var qryselect = "SELECT * FROM servers";

            var trancate = "SELECT * FROM servers created_at<=DATE_SUB(NOW(), INTERVAL 1 DAY); TRUNCATE servers;"

            var sqlinsert = "INSERT INTO servers (`server_name`, `cpu`, `used_memory`,`total_memory`,`ip_addr`) VALUES ('"+ser_name+"', '"+ser_cpu+"','"+ser_used+"','"+ser_total+"','"+ser_ip+"')";

            var sqldelete = "DELETE FROM servers WHERE created_at<=DATE_SUB(NOW(), INTERVAL 1 DAY)";
            // var sqlupdate = "UPDATE servers SET cpu = '"+ser_cpu+"', used_memory = '"+ser_used+"',total_memory = '"+ser_total+"' WHERE server_name = '"+ser_name+"' ";

            con.query(qryselect, function(err,result){
                var json_name = JSON.stringify(result);
                var s_name = JSON.parse(json_name);
                for(var j=0;j<s_name.length;j++){
                    var ss_name = s_name[j].server_name;
                    var created_time = s_name[j].created_at;
                    var d_db = new Date(created_time),
                    month_db = '' + (d_db.getMonth() + 1),
                    day_db = '' + d_db.getDate(),
                    year_db = d_db.getFullYear();
                    hr_db= d_db.getHours();
                    min_db = d_db.getMinutes();
                    
                    if (month_db.length < 2) month_db = '0' + month_db;
                    if (day_db.length < 2) day_db = '0' + day_db;
                  

                    var datte_db = [year_db, month_db, day_db].join('-');
                    var time_db = [hr_db,min_db].join(':');
                    var datetime_db = [datte_db, time_db].join(' ');

                      arrname.push(ss_name);
                      arrtime.push(datetime_db);
                    } 
                      
                    for (var i = 0; i < arrname.length; i++) {
                        var sqlupdate = "UPDATE servers SET cpu = '"+ser_cpu+"', used_memory = '"+ser_used+"',total_memory = '"+ser_total+"' WHERE server_name = '"+ser_name+"', created_at = "+datetime+"  ";
                        if (arrname[i] === ser_name && arrtime[i] === datetime) {
                            con.query(sqlupdate,function(){
                                console.log('1 record updated');
                            });
                              return true;
                        }
                    }
                    con.query(sqlinsert,function(){
                        console.log('1 record inserted!');
                    });
                    return false;
            });
            con.query(trancate, function(){
                console.log("old data are deleted!");
            })

        });
    }
});

server.listen(3000,function(){
    console.log('listen on 3000:');
});