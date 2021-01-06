<?php
$number=4567;
$sum=0;
while($number!=0)
{
    $sum=$sum*10+(int)$number%10;
    $number=(int)($number/10);
}
$digit1=($sum/1000+7)%10;
$digit2=($sum%1000/100+7)%10;
$digit3=($sum%100/10+7)%10;
$digit4=($sum%10+7)%10;
$dn = (int)$digit1*10+$digit2+$digit3*1000+$digit4*100;
echo $dn;
?>