<?php
if(isset($_POST['Submit']))
{
if(!empty($_POST['chk1']))
foreach($_POST['chk1']as $selected)
{
echo $selected."<br>";
}
}
?>