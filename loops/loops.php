<?php
//for loop
for ($i = 1; $i <= 5; $i++) {
    echo "Iteration: " . $i . "<br>";
}

//while loop
$c=5;
while($c){
    echo $c-- ."<br>";
}
//foreach loop
$ages=[21,25,30,35];
foreach($ages as $a){
    echo "age: ".$a. "<br>";
}
//loop through associative array
$information=[
    "name"=>"yazan",
    "age"=>22,
    "city"=>"Tulkarm"
];
foreach($information as $key=>$value){
    echo $key. ": ".$value. "<br>";
}
//loop through multidimensional array
$students=[
    "s1"=>["name"=>"yazan","age"=>22],
    "s2"=>["name"=>"sary","age"=>22],
    "s3"=> ["name"=>"hussein","age"=>20]
];
foreach($students as $student=>$val){
    echo $student. ": ";
    foreach($val as $key=>$value){
        echo "the key is: ".$key . "and value is: ".$value."<br>";
    }
}