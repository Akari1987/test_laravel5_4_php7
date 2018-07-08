var app = require('express')();
var server = require('http').Server(app);
var io = require('socket.io')(server);
var redis = require('redis');

server.listen(8081, function() {
    console.log('listening on port: 8081')
});

io.on('connection', function(socket) {
    console.log('New client connected.');
    var redisClient = redis.createClient();
    redisClient.subscribe('message');
    redisClient.on('message', function(channel, message) {
        console.log('New message queue.', channel, message)
    })
});

app.get('/', function(req, res) {
    res.send('<h1>Hello World</h1>');
});