console.log("To demonstrate Closure in Callback");
function logBike(logMessage,callback) {
    process.nextTick(function () {
        callback(logMessage);
    });
}
var bikes = ["Hero","Honda","Yamaha"];
for(var i in bikes)
{
    var message = "Saw a "+bikes[i];
    logBike(message,()=>{
        console.log("Normal callback: "+message);
    });
}
for(var i in bikes)
{
    var message = "Saw a"+bikes[i];
    (function (msg) {
        logBike(msg,()=>{
            console.log("Closure callback: "+msg);
        })(message);
    })
}