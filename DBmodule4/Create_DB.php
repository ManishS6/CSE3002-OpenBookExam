<?php
$con=mysqli_connect("localhost","manish","manish");
if(!$con){
    die('Could not connect: '.mysli_error());
}
$sql="create database example2";
$result=mysqli_query($con,$sql) or 
die(mysqli_error);
if($result){
    echo "database created successfully";
} else {
    echo "Error in creating data base";
}
?>