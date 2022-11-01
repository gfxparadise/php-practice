<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'parts/_dbconnect.php';
    $name = $_POST["name"];
    $password = $_POST["password"]; 
    
     
    $sql = "Select * from gfx where name='$name'";
   $result = mysqli_query($conn, $sql);
   $num = mysqli_num_rows($result);

   if ($num == 1){
    while($row=mysqli_fetch_assoc($result)){
        if (password_verify($password, $row['password'])){
    $login=true;
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['name'] = $name;
    header("location: welcome.php");
   }
}}}
?>