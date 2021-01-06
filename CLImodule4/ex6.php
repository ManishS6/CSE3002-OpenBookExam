<?php
echo "Enter Principal Amount:";
$p = readline();
echo "Enter Rate of Interest:";
$r = readline();
echo "Enter the number of years:";
$n = readline();
$si = ($p*$r*$n)/100;
echo "Simple Interest is: $si";
?>