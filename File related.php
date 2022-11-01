<?php

// // Time to open new file 
// // $a = readfile("myfile.txt");

// // It will show you count of word 
// // echo $a;

// // you are not able to open image 
// // readfile("1.png");

// // direct way to open file 
// readfile("file.html");

// open file using fopen 
$fptr = fopen("myfile.txt", "r");
// echo var_dump($fptr);
// if(!$fptr){
//     die("Unable to open this file.Please enter a valid filename");
// }
// // It will showFopen file
// $content = fread($fptr, filesize("myfile.txt"));
// echo $content;

// // we also use fclose to reduse cpu usage 
// fclose($fptr);

// // It will read only one line 
// echo fgets($fptr);

// // loop it will read file line by line 
// while ($a=fgets($fptr)){
//     echo $a;
// }

// read character by character 

// while ($a=fgetc($fptr)){
//     echo $a;
//     break;
// }

// // It will read character till "." comes 
// while ($a=fgetc($fptr)){
//     echo $a;
//     if($a == ".")
//     break;
// }

// // It will automatically create file to write 
// $fptr = fopen("myfile4.txt", "w");

// // It will automatically write in file one time
// fwrite($fptr, "bla bla blaaaaaa")

// // Add \n in text ending so it will text come in next line

// // time to append file "it will ad content in the end of file"
// $fptr = fopen("myfile4.txt", "a");
// fwrite($fptr, "\n booooooooooooooo")



?>