<?php
$con=mysqli_connect("localhost","manish","manish");
if(!$con){
    die('Could not connect: '.mysli_error());
}
mysqli_select_db($con,"example3");
$sql="insert into product(productcode,productname,cost) values('P001','Cheese',150)";
$result = mysqli_query($con,$sql);
if($result){
    echo "data inserted in table created successfully";
} else {
    echo "Error inserting data in table";
}
?>