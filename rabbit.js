var config = require('./config/server.json');

var context = require('rabbit.js').createContext(config.host);
context.on('ready', function() {
  var sub = context.socket('SUB');
  sub.pipe(process.stdout);
  sub.connect('events', function() {

  });
});

