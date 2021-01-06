function simpleTimeout(consoleTimer){
    console.timeEnd(consoleTimer);
}
console.log("TenSeconds");
setTimeout(simpleTimeout,10000,"TenSeconds");
console.log("EightSeconds");
setTimeout(simpleTimeout,8000,"EightSeconds");
console.log("100MilliSeconds");
setTimeout(simpleTimeout,100,"100MilliSeconds");
console.log("ThreeSeconds");
setTimeout(simpleTimeout,3000,"ThreeSeconds");
// setTimeout(``)