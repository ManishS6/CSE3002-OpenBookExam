var http = require('http');
let fs = require('fs');
var server = http.createServer(function(request,response){
    response.writeHead(200, {'Content-Type': 'text/html'});
    fs.readFile('./index.html',null,function(error,data){
        if(error){
            response.writeHead(404);
            response.write('Whoops! File not found');
        } else{
            response.write(data);
        } response.end();
    }
);
});
server.listen(8081);