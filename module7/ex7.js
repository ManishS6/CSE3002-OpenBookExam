console.log("To demostrate Callback Chain");
function logBike(bike,callback) {
    console.log("Saw a %s",bike);
    if(bikes.length){
        process.nextTick(function(){
            callback();
        });
    }
}
function logBikes(bikes) {
    var bike = bikes.pop();
    logBike(bike,function(){
        logBikes(bikes);
    });
}
var bikes = ["Hero","Honda","Yamaha"];
logBikes(bikes);