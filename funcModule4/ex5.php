<?php
// PHP program to transpose a matrix
$a=array(
    array(10,20,30),
    array(40,50,60),
    array(70,80,90)
);
for($i=0;$i<3;$i++){
    for($j=0;$j<3;$j++){
        $t[$i][$j]=$a[$j][$i];
    }
}
echo "Transpose of given matrix:"."\n";
for($i=0;$i<3;$i++){
    for($j=0;$j<3;$j++){
        echo $t[$i][$j]." ";
    }
    echo "\n";
}
?>