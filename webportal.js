var app = require('express')();
var server = require('http').Server(app);
var io = require('socket.io').listen(server);
var Redis = require('ioredis');
var redis = new Redis();

redis.psubscribe("webportal-*", function (err, count) {

});

redis.on('pmessage', function (channel, pattern, message) {
    console.log(channel, message);
    message = JSON.parse(message);
    io.emit(channel + ':' + message.event, message.data);
});

server.listen(3300,function(){
    console.log('listen on 3300:');
});	