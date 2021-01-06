<?php
$a = 125;
$b = 135;
$c = "Manish Swami";
$l = log($a,5);
echo $l."<br>";
//Checking if a is a power of 125
if(is_int($l)){
    echo "yes the number is a power of 5 <br>";
}else{
    echo "no the number is not a power of 5 <br>";
}

// Checking if II int > I int
if($b > $a){
    echo "The second integer is greater than first symbol <br>";
} else{
    echo "The first integer is greater than the second integer <br> ";
}

// Printing the value in reverse
echo strrev($c);
?>