<?php
// Time to explore session 
// Session is use to store information across the different pages, it save our password and give us freedom to auto login again by verfing the user info
 session_start();
 $_SESSION ['username'] = "AQ";
 $_SESSION ['favcolor'] = "green";

 echo "session is saved"


?>