<?php
$mark=readline("enter the mark");
if($mark>=90)
echo "Eligible for Computer Science Engineering";
elseif ($mark>=80 && $mark<90)
echo "Eligible for Mechanical Engineering";
elseif ($mark>=70 && $mark<80)
echo "Eligible for Civil Engineering";
else
echo "Eligible for other engineering branches";
?>