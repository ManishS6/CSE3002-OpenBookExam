<?php
$con=mysqli_connect("localhost","manish","manish");
if(!$con){
    die('Could not connect: '.mysli_error());
}
mysqli_select_db($con,"example3");
$sql="delete from product where cost=0";
$result = mysqli_query($con,$sql);
if($result){
    echo "null data deleted from the table  successfully";
} else {
    echo "Error inserting data in table";
}
?>