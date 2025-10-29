<?php 


function add($x,$y){
    return $x+$y;
}
$n1=10;
$n2=20;
$result=add($n1,$n2);
echo $result;

function sum(...$numbers){
    $total=0;
    foreach($numbers as $num){
        $total +=$num;
    }
    return $total;
}
function sum2(){
    $total=0;
    $numbers=func_get_args();
    foreach($numbers as $num){
        $total +=$num;
    }
    return $total;
}
echo "<br>";
echo sum(1,2,3,4,5);
echo "<br>";
echo sum2(1,2,3,4,5);
echo "<br>";
//function by reference

function addFive(&$num){
    $num +=5;
}
$num1=100;
addFive($num1); 
echo $num1;
