<?php 
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

?>