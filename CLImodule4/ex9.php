<?php
$x=readline("read the value of x");
$n=readline("read the value of n");
switch($n){
case 1:
    $y=1+$x; break;
case 2:
    $y=1+$x/$n;break;
case 3:
    $y=1+pow($x,$n);break;
default:
    $y=1+$n*$x;break;
}
echo "The value of y(x,n) = ".$y;
?>