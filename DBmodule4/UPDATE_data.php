<?php
$con=mysqli_connect("localhost","manish","manish");
if(!$con){
    die('Could not connect: '.mysli_error());
}
mysqli_select_db($con,"example3");
$sql="update product set productcode='H001',productname='Himalayan Facewash',cost='2510'  where productname='Himalayan Facewash'";
$result = mysqli_query($con,$sql);
if($result){
    echo "data updated from the table  successfully";
} else {
    echo "Error updating data in table";
}
?>