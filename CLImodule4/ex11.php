<?php
$x=102005;
$y=$x;
$i=1;
$s=0;
while($y!=0){
    $r=$y%10;
    if($r!=0){
        $s+=$i*$r;
        $i*=10;
    }
    $y/=10;
}
echo "After removing 0's: $s";
?>