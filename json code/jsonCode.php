<?php
//json_encode() function is used to convert PHP array into JSON format.
$colors=["Red","Green","Blue","Yellow"];
$jsonColors=json_encode($colors);
echo $jsonColors;//Output: ["Red","Green","Blue","Yellow"]
echo "<br>";

//json_decode() function is used to convert JSON format into PHP array.
$jsonData='{"name":"John","age":30,"city":"New York"}';
print_r($jsonData);
echo "<br>";
$phpArray=json_decode($jsonData,true);//true parameter is used to convert JSON into associative array, if false or omitted, it converts into object.

//Check for JSON decoding errors
if(json_last_error() !== JSON_ERROR_NONE){
    echo "Error decoding JSON: " . json_last_error_msg();
}else{
    echo "JSON decoded successfully.";
}
print_r($phpArray);


