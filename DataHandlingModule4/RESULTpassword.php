<html>
<body>
<h1>Reading Data from password controls</h1>
<?php
echo $_POST["password"];
if($_POST["password"]=="raj"){
echo "<h3>Password accepted</h3>";
}
else{
echo "<h3>Please enter correct password</h3>";
}
?>
</body>
</html>