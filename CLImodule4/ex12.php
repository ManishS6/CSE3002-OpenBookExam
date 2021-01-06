<?php
echo "Enter the Number:";
$y=readline();
$x=$y;
$sum=0;
do{
    $sum+=($y%10);
    $y=intval($y/10);
} while($y>0);
if($x%$sum==0){
    echo "Divisible";
} else {
    echo "Not Divisible";
}
?>