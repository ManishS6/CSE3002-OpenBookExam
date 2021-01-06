<?php
echo "How many of numbers of places";
$n = readline();
$sml = 0;
for($i=0;$i<$n;$i++){
    echo "Enter No of liters from place".($i+1).":";
    $l = readline();
    echo "Enter No of milli-liters from place".($i+1).":";
    $ml = readline();
    $sml+=$l*1000+$ml;
}
$sml2 = $sml;
echo "Total Water in Dam is ".intVal($sml/1000)." litres and ".intval($sml%1000)." milli-litres";
?>