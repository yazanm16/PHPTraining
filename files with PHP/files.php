<?php
/*
Opening files in PHP
using fopen() function, which requires the filename and mode as parameters
    for mode there are several options:
    'r' - Read only. File pointer starts at the beginning of the file
    'w' - Write only. Opens and clears the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
    'a' - Write only. Opens and writes to the end of the file or creates a new file if it doesn't exist. File pointer starts at the end of the file
    '+r' - Read and write. File pointer starts at the beginning of the file
    '+w' - Read and write. Opens and clears the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
    ... and more
*/
echo "<h3>Opening a file in PHP</h3>";
$file = fopen("sample.txt", "r");//this is only to do connection to the file
if ($file) {
    $content=fread($file, filesize("sample.txt"));//fread() reads the file content, requires the file connection and number of bytes to read
    echo $content;
    fclose($file);//fclose() closes the file connection
} else {
    echo "Error opening file.";
}
echo "<br>";

$newFile = fopen("sample.txt", "w");
if ($newFile) {
    $text = "This is a new file created using PHP..";
    fwrite($newFile, $text);//fwrite() writes content to the file, requires the file connection and the text to write
    fclose($newFile);
    echo "The text has been written to the file.";
} else {
    echo "Error creating file.";
}
echo "<br>";
//there is more functions to work with files in PHP will explore them as needed.
echo "from another file"."<br>";
//also I can include files using include() or require() functions
include './sample.php'; //this will include and run the code if path is wrong it will give a warning but continue execution
sayHi();//calling the function from the included file
echo "<br>";
//require './sample.php'; //this will include and run the code if path is wrong it will give an error and stop execution
echo "End of file.";
//also there is include_once() and require_once() functions to avoid multiple inclusions of the same file