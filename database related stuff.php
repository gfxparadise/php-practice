<?php

// Connect MySQL Database
  // MySQLi Extention (only MySQL database link)
    // object oreanted
      // by class and object
   // procedural
// PDO ( Any database can link)

// Conect to Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "GFX";

// let make connection
$conn = mysqli_connect($servername, $username, $password, $database);

//if don't connect so it will die
if (!$conn){
    die("sorry we are failed to connect" . mysqli_connect_error());
}
else {
echo "We are happy to say that you are connected to PHP My Admin database";
}

echo "<br>";

// // Create database
// $sql = "CREATE DATABASE GFX";
// $result = mysqli_query($conn, $sql);

// // Lets check created or not 
// if ($result) {
//   echo "The Database is created";
// }
// else {
//   echo "The Database is not connected because --->" . mysqli_error();
// }

// // time to create table and database in data base
// $sql = "CREATE TABLE `TGP` ( `sno` INT(6) NOT NULL AUTO_INCREMENT , `Name` VARCHAR(12) NOT NULL , `Location` VARCHAR(6) NOT NULL , PRIMARY KEY (`sno`))";
// $resul = mysqli_query($conn, $sql);

// // Check for the table creation success
// if($result){
//     echo "The table was created successfully!<br>";
// }
// else{
//     echo "The table was not created successfully because of this error ---> ". mysqli_error($conn);
// }

// echo "<br>";

// // Now time to add data in table 
// $name = "AQ";
// $location = "Karachi";

// // Sql query to be executed
// $sql = "INSERT INTO `TGP` (`Name`, `Location`) VALUES ('$name', '$location')";
// $result = mysqli_query($conn, $sql);

// // Add a new trip to the Trip table in the database
// if($result){
//     echo "The record has been inserted successfully successfully!<br>";
// }
// else{
//     echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
// }

// // 

// $sql = "SELECT * FROM `gfx`";
// $result = mysqli_query($conn, $sql);

// // Find the number of records returned
// $num = mysqli_num_rows($result);
// echo $num;
// echo " records found in the DataBase<br>";
// // Display the rows returned by the sql query (manualy)
// if($num> 0){
//     // $row = mysqli_fetch_assoc($result);
//     // echo var_dump($row);
//     // echo "<br>";
//     // $row = mysqli_fetch_assoc($result);
//     // echo var_dump($row);
//     // echo "<br>";
//     // $row = mysqli_fetch_assoc($result);
//     // echo var_dump($row);
//     // echo "<br>";
//     // $row = mysqli_fetch_assoc($result);
//     // echo var_dump($row);
//     // echo "<br>";
//     // $row = mysqli_fetch_assoc($result);
//     // echo var_dump($row);
//     // echo "<br>";
//     // $row = mysqli_fetch_assoc($result);
//     // echo var_dump($row);
//     // echo "<br>";
//     // $row = mysqli_fetch_assoc($result);
//     // echo var_dump($row);
//     // echo "<br>";

//     // We can fetch in a better way using the while loop (automatic)
//     while($row = mysqli_fetch_assoc($result)){
//         // echo var_dump($row);
//         echo  " Hello ". $row['name'] ." we send a message on ". $row['email'] . " your description is " . $row['des'];
//         echo "<br>";
//     }


// }

// $sql = "SELECT * FROM `gfx` WHERE `email`='abdul.qadir.avadia@gmail.com'";
// $result = mysqli_query($conn, $sql);

// // Usage of WHERE Clause to fetch data from the database
// $num = mysqli_num_rows($result);
// echo $num . " records found in the DataBase<br>";
// $no=1;
// if($num> 0){  
//     while($row = mysqli_fetch_assoc($result)){ 
//         echo $no .  ". Hello ". $row['name'] ." we send a message on ". $row['email'];
//         echo "<br>";
//         $no = $no +1;
//     }
// }

// // Usage of WHERE Clause to Update Data
// $sql = "UPDATE `gfx` SET `name` = 'ARK' WHERE `des` = 'hhhhhhhh'";
// $result = mysqli_query($conn, $sql);
// echo var_dump($result);
// $aff = mysqli_affected_rows($conn);
// echo "<br>Number of affected rows: $aff <br>";
// if($result){
//     echo "We updated the record successfully";
// }
// else{
//     echo "We could not update the record successfully";
// }

// // Time to delete the data from database
// $sql = "DELETE FROM `gfx` WHERE `name` = 'ARK' ";
// $result = mysqli_query($conn, $sql);
// $aff = mysqli_affected_rows($conn);
// echo "<br>Number of affected rows: $aff <br>";

// if($result){
//     echo "Delete successfully";
// }
// else{
//     $err = mysqli_error($conn);
//     echo "Not Delete successfully due to this error --> $err";
// }



?>