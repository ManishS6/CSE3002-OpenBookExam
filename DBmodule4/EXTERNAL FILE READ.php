<?php
$con=mysqli_connect("localhost","manish","manish");
mysqli_select_db($con,"example3");
$sql="load data from local infile 'C:/xampp/htdocs/m4/products.txt' into table product";
// also below can be used
// $sql="load data from local infile 'C:/xampp/htdocs/m4/products.txt' into table product(productcode,productname,cost,manufacturer)";
$result = mysqli_query($con,$sql);
if($result){
    echo "Data Successfully Retrieved and saved into a file in the location ../products.txt".'<br/>';
} else {
    echo "Error performing the storing the result into a file action".'<br/>';
}
?>