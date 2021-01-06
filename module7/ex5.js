const events = require('events');
function BikeShow() {
    events.EventEmitter.call(this);
    this.seeBike = (make)=>{
        this.emit('sawBike',make);
    };
}
BikeShow.prototype.__proto__ = events.EventEmitter.prototype;
var show = new BikeShow();
function logBike(make) {
    console.log("Saw a"+make);
}
function BikeColor(make,color) {
    console.log("Saw a %s %s",color,make);
}
show.on("sawBike",logBike);
show.on("sawBike",(make)=>{
    var Colors = ['blue','black','yellow'];
    var color = Colors[Math.floor(Math.random()*3)];
    BikeColor(make,color);
})
show.seeBike("Hero");
show.seeBike("Honda");
show.seeBike("Yamaha");
show.seeBike("Bajaj");