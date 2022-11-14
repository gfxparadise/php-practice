<?php
    if($_SERVER["REQUEST_METHOD"] == "POST" ){
        include 'db_connect.php';

		$name = $_POST["name"];
		$fname = $_POST["fname"];
		$gender = $_POST["gender"];
        $id = $_POST["id"];
		$mail = $_POST["mail"];
		$date = $_POST["date"];
		$salary = $_POST["salary"];
		$allowance = $_POST["allowance"];
        $netsalary = $_POST["netsalary"];

		$sql = "INSERT INTO eform(name, fatherName, gender, employeeId, email, date, salary, allowance, net) VALUES ('{$name}', '{$fname}', '{$gender}', '{$id}', '{$mail}', '{$date}', '{$salary}', '{$allowance}', '{$netsalary}')";
        $result = mysqli_query($conn, $sql);

  if ($result){
    echo 1;
  }
   }
   else{
    echo 0;
   }

?>


    
