<?php
//in php we have some predefined functions to work with date and time 
echo "The current date and time is: " . date("Y-m-d H:i:s") . "\n"."<br>";
echo "The current date and time is: " . date("Y-m-d h:i:s A") . "\n"."<br>";//12 hour format with AM/PM
//there are different format characters to represent different parts of date and time

echo time();//it returns the current time in seconds since the Unix Epoch (January 1 1970 00:00:00 GMT)
echo "<br>";
//the strtotime() function is used to convert a date/time string into a Unix timestamp
echo strtotime("2024-12-31 23:59:59");//it returns the timestamp for the specified date and time
echo "<br>";
echo strtotime("+1 day");//it returns the timestamp for the date and time one day from now
echo "<br>";

$timeStamp=mktime(2, 20, 50, 12, 31, 2024);//it returns the Unix timestamp for a specific date and time
echo date("Y-m-d h:i:s A", $timeStamp);//it formats the timestamp into a human-readable date and time
echo "<br>";

$date=new DateTime();//it creates a new DateTime object representing the current date and time
echo $date->format("Y-m-d h:i:s A");//it formats the current date and time using the DateTime class
echo "<br>";
$date->modify("+1 day");
echo $date->format("Y-m-d h:i:s A");//it modifies the date by adding one day and formats it
echo "<br>";

$newDate=new DateTime("now",new DateTimeZone('Asia/Gaza'));//it creates a DateTime object with a specific timezone
echo $newDate->format("Y-m-d h:i:s A");//it creates a DateTime object with a specific timezone and formats it