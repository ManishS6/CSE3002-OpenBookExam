<?php
// Passing array to an function
$a=array(10,20,30,40,50);
average($a);
function average($a){
    $total=0;
    foreach($a as $v){
        $total+=$v;
    }
    echo $total/count($a);
}
?>