<?php
$con=mysqli_connect("localhost","manish","manish");
if(!$con){
    die('Could not connect: '.mysli_error());
}
mysqli_select_db($con,"univ");
$sel="select * from student";
$sq=mysqli_query($con,$sel);

while($row=mysqli_fetch_array($sq))
{
echo $row['regno']." ".
     $row['sName']." ".
     $row['mobile']."<br>";
}

?>