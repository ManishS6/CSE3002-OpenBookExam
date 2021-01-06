<?php
$con=mysqli_connect("localhost","manish","manish");
if(!$con){
    die('Could not connect: '.mysli_error());
}
mysqli_select_db($con,"example3");
$sql="select * from product";
$result = mysqli_query($con,$sql);
$rowcount=mysqli_num_rows($result);
if($result){
    echo "Data Successfully Selected from the table successfully".'<br/>'."Total number of rows in the result is ".$rowcount.'<br/>';
} else {
    echo "Error Selecting data from the table".'<br/>';
}
while($row=mysqli_fetch_array($result)){
    echo $row['productcode']." "
        .$row['productname']." "
        .$row['cost'].'<br>';
}
?>