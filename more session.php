<?php
// Start the session and get the data
session_start();
if(isset($_SESSION['username'])){
    echo "Welcome ". $_SESSION['username'];
    echo "<br> Your favorite colour is ". $_SESSION['favColor'];
    echo "<br>";
}
else{
    echo "Please login to continue";
}
?>