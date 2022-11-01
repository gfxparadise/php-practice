<?php  
// Time to work with cookies
// Cookies save in you browser (not secure data)
// Sessions save in server (secured data) 

setcookie("category" , "Books" , time() + 86400, "/" );
echo "cookie is set";

?>