<?php
$con=mysqli_connect("localhost","manish","manish");
mysqli_select_db($con,"example3");
$sql="select * from product into outfile 'C:/xampp/htdocs/m4/products.txt'";
$result = mysqli_query($con,$sql);
if($result){
    echo "Data Successfully Retrieved and saved into a file in the location ../products.txt".'<br/>';
} else {
    echo "Error performing the storing the result into a file action".'<br/>';
}
?>