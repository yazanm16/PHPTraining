<?php
//Arithmetic Operators
$x=10;
$y=5;
echo $x + $y;//15
echo "<br>";
echo $x - $y;//5
echo "<br>";
echo $x * $y;//50
echo "<br>";
echo $x / $y;//2
echo "<br>";
echo $x % $y;//0
echo "<br>";

//Logical Operators
$a=true;
$b=false;
var_dump($a && $b);//bool(false)(and)
echo "<br>";
var_dump($a || $b);//bool(true)(or)
echo "<br>";
var_dump(!$a);//bool(false)(not)
echo "<br>";
var_dump($a xor $b);//bool(true)

//Assignment Operators
$z=10;
$z +=5;//$z=$z+5
echo "<br>";
echo $z;//15
$z -=3;//$z=$z-3
echo "<br>";
echo $z;//12
$z *=2;//$z=$z*2
echo "<br>";
echo $z;//24
$z /=4;//$z=$z/4
echo "<br>";
echo $z;//6
$z %=4;//$z=$z%4
echo "<br>";
echo $z;//2
echo "<br>";

//Comparison Operators
$m=10;
$n=5;
var_dump($m == $n);//bool(false)
echo "<br>";
var_dump($m === $n);//bool(false)
echo "<br>";
var_dump($m != $n);//bool(true)
echo "<br>";
var_dump($m !== $n);//bool(true)
echo "<br>";
var_dump($m > $n);//bool(true)
echo "<br>";
var_dump($m < $n);//bool(false) 
echo "<br>";
var_dump($m >= $n);//bool(true)
echo "<br>";
var_dump($m <= $n);//bool(false)
echo "<br>";
//Increment/Decrement Operators
$p=5;
echo $p++;//5
echo "<br>";
echo $p;//6
echo "<br>";
$q=5;
echo ++$q;//6
echo "<br>";
echo $q;//6
echo "<br>";
$r=5;
echo $r--;//5
echo "<br>";
echo $r;//4
echo "<br>";
$s=5;
echo --$s;//4
echo "<br>";
echo $s;//4
echo "<br>";
