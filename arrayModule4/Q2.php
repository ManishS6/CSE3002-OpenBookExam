<?php
// creating an array of length 10
$people = array("19bce1380","19bce1292","19bce1295","19bce1769","19bce1382","19bce1492","19bce1456","19bce1299","19bce1401","19bce1180");
$check1 = "19bce1382";
$check2 = "19bce1388";
// checking if the word is present in the array
if(in_array($check1,$people)){
    echo "Congratulations " . $check1 . " you are placed" . "<br>";
}else{
    echo "Sorry " . $check1 . " is not placed" . "<br>";
}
if(in_array($check2,$people)){
    echo "Congratulations " . $check2 . " you are placed" . "<br>";
}else{
    echo "Sorry " . $check2 . " is not placed" . "<br>";
}
?>