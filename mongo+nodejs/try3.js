var http = require("http");
let fs = require('fs');
var server=http.createServer(function (request, response) {​​​​​
// response.writeHead(200, {​​​​​'Content-Type': 'text/plain'}​​​​​);
fs.readFile('./index.html', null, function (error, data) {​​​​​
            if (error) {​​​​​
              response.writeHead(404);
              respone.write('Whoops! File not found!');
          }​​​​​ 
  else {​​​​​
  response.write(data);
  }​​​​​
  response.end();
  }​​​​​);
}​​​​​);
server.listen(8000);
// Console will print the message
// console.log('Server running at // http://127.0.0.1:8000/ or http://localhost:8000/');
