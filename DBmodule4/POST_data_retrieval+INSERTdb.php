<?php
$con=mysqli_connect("localhost","manish","manish");
if(!$con){
    die('Could not connect: '.mysli_error());
}
mysqli_select_db($con,"example3");
$sql="insert into product(productcode,productname,cost) values(
    '$_POST[code]',
    '$_POST[name]',
    '$_POST[cost]')";
$result = mysqli_query($con,$sql);
if($result){
    echo "Number of records added: 1";
} else {
    echo "Error in inserting records in database";
}
?>