<?php
$array[] = array('P-id' => '1', 'Name' => 'Alen', 'Age' => '39');
$array[] = array('P-id' => '2', 'Name' => 'Deena', 'Age' => '47');
$array[] = array('P-id' => '3', 'Name' => 'Divya', 'Age' => '21');
$array[] = array('P-id' => '4', 'Name' => 'Jack', 'Age' => '54');
$array[] = array('P-id' => '5', 'Name' => 'Joe', 'Age' => '23');
$array[] = array('P-id' => '6', 'Name' => 'Kelvin', 'Age' => '61');
$array[] = array('P-id' => '7', 'Name' => 'Leo', 'Age' => '27');
$array[] = array('P-id' => '8', 'Name' => 'Rex', 'Age' => '49');
$columns = array_column($array, 'Age');
array_multisort($columns, SORT_DESC, $array);
print_r($array);
?>