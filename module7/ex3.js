console.log("Simple Interval");
function display(){
    console.log("A=%d;B=%d;C=%d",a,b,c);
}
function inA(){a++;}
function inB(){b++;}
function inC(){c++;display();}
a=4;b=2;c=4;
setInterval(inA, 200);
setInterval(inB, 300);
setInterval(inC, 400);