<?php
$con=mysqli_connect("localhost","manish","manish");
if(!$con){
    die('Could not connect: '.mysli_error());
}
mysqli_select_db($con,"example3");
$sql="create table product12(productcode char(7), productname varchar(20), cost int, Manufacturer varchar(15))";
$result = mysqli_query($con,$sql);
if($result){
    echo "table  created successfully";
} else {
    echo "Error in creating table";
}
?>