<?php
//if
$age = 20;
if ($age >= 18) {//you can put any condition here
    echo "You are an adult."."<br>";
}
//if-else
$agee = 16;
if ($agee >= 18) {
    echo "You are an adult."."<br>";
} else {
    echo "You are a minor."."<br>";
}
//if-elseif-else
$score = 85;
if ($score >= 90) {
    echo "Grade: A"."<br>";
} elseif ($score >= 80) {
    echo "Grade: B"."<br>";
} elseif ($score >= 70) {
    echo "Grade: C"."<br>";
} else {
    echo "Grade: F"."<br>";
}
//nested if
$number = 15;
if ($number > 0) {
    if ($number % 2 == 0) {
        echo "The number is a positive even number."."<br>";
    } else {
        echo "The number is a positive odd number."."<br>";
    }
} else {
    echo "The number is not positive."."<br>";
}
//switch
$symbol = 3;
switch ($symbol) {
    case 1:
        echo "!"."<br>";
        break;
    case 2:
        echo "@"."<br>";
        break;
    case 3:
        echo "#"."<br>";
        break;
    case 4:
        echo "$"."<br>";
        break;
    case 5:
        echo "%"."<br>";
        break;
    case 6:
        echo "^"."<br>";
        break;
    case 7:
        echo "&"."<br>";
        break;
    case 8:
        echo "*"."<br>";
        break;
    case 9:
        echo "("."<br>";
        break; 
    case 0:
        echo ")"."<br>";
    default:
        echo "Invalid number."."<br>";
        break;
}
