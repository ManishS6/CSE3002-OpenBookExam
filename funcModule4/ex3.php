<?php
echo "Enter the no of values in Array:";
$n = readline();
echo "Enter Array values:";
for($i=0;$i<$n;$i++){
    $a[$i] = readline();
}
for($i=0;$i<4;$i++){
    for($j=$i+1;$j<4;$j++){
        if ($a[$i]>$a[$j]) {
            $temp=$a[$i];
            $a[$i]=$a[$j];
            $a[$j]=$temp;
        }
    }
}
print_r($a);
echo "Smallest no:".$a[0]."\n";
echo "Biggest no:".$a[3]."\n";
$sum=0;
for($j=0;$j<4;$j++){
    $sum+=$a[$j];
}
echo "Total of numbers:".$sum."\n";
$avg=$sum/4;
echo "Average of numbers: ".$avg;
?>