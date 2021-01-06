<?php
echo "Enter the Value of N: ";
$n = readline();
$nos = array();
for($i=0;$i<$n;$i++){
    $nos[$i]=readline();
}
$sume=0;
$sumo=0;
$oddcount=0;
$evencount=0;
foreach($nos as $no){
    if($no%2==0){
        $sume+=$no;
        $evencount++;
    }
    else{
        $sumo+=$no;
        $oddcount++;
    }
}
echo "The sum of odd nos".$sumo."\n"."No. of Odd Nos: ".$oddcount."\n";
echo "The sum of even nos".$sume."\n"."No. of Even Nos: ".$evencount."\n";
?>