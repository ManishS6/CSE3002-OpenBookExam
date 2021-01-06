<?php
for($x=-1.5;$x<=1.5;$x+=0.5)
{
    for($y=0;$y<=3.0;$y+=1.0){
        $z=3*$x*$x+2*$y*$y*$y-25.5;
        echo "The value of y($x,$y) is $z \n";
    }
}
?>