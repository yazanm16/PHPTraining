<?php
//In php there is three type of arrays:

//-Indexed Arrays:
$arr=[1,2,5,3,3.5,10,"y",'t'];//or $arr=array(1,2,5,3,3.5,10,"y",'t');
echo $arr[0];//1
echo "<br>";
echo $arr[5];//10 
echo "<br>";
print_r($arr);//Array ( [0] => 1 [1] => 2 [2] => 5 [3] => 3 [4] => 3.5 [5] => 10 [6] => y [7] => t )
echo "<br>";
var_dump($arr);//array(8) { [0]=> int(1) [1]=> int(2) [2]=> int(5) [3]=> int(3) [4]=> float(3.5) [5]=> int(10) [6]=> string(1) "y" [7]=> string(1) "t" }
echo "<br>";
$arr[]=13;//add to last index
print_r($arr);//Array ( [0] => 1 [1] => 2 [2] => 5 [3] => 3 [4] => 3.5 [5] => 10 [6] => y [7] => t [8] => 13 )
echo"<br>";

//-Associative Array:
$information=[
    "name"=>"yazan",
    "age"=>22,
    "city"=>"Tulkarm"
];
var_dump($information);//array(3) { ["name"]=> string(5) "yazan" ["age"]=> int(22) ["city"]=> string(7) "Tulkarm" }
echo "<br>";
$information["email"]="yazanmohammed16@gmail.com";
print_r($information);//Array ( [name] => yazan [age] => 22 [city] => Tulkarm [email] => yazanmohammed16@gmail.com )
echo "<br>";

//-Multidimensional Arrays
$students=[
    "s1"=>["name"=>"yazan","age"=>22],
    ["name"=>"sary","age"=>22],
    ["name"=>"hussein","age"=>20]
];
echo $students["s1"]["age"];//yazan