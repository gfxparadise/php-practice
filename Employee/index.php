<?php
    if($_SERVER["REQUEST_METHOD"] == "POST" ){
        include 'db_connect.php';

		$name = $_POST['name'];
		$fname = $_POST['fname'];
		$gender = $_POST['gender'];
        $id = $_POST['id'];
		$mail = $_POST['mail'];
		$date = $_POST['date'];
		$salary = $_POST['salary'];
		$allowance = $_POST['allowance'];
        $netsalary = $_POST['netsalary'];

		$sql = "INSERT INTO `eform`(`name`, `fatherName`, `gender`, `employeeId`, `email`, `date`, `salary`, `allowance`, `net`) VALUES ('name', 'fname', 'gender', 'id', 'mail', 'date', 'salary', 'allowance', 'netsalary')";
 $result = mysqli_query($conn, $sql);
  if ($result){
    echo 1;
  }
   }
   else{
    echo 0;
   }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <div class="container">
        <h2>Employee Form</h2>
        <div class="table-resposive">
            <table class="table table-bordered" id="crud_table">
                <tr>
                    <th>Name</th>
                    <th>Father Name</th>
                    <th>Gender</th>
                    <th>Employee ID</th>
                    <th>Email Id</th>
                    <th>Date of join</th>
                    <th>Basic Salary</th>
                    <th>Allowances</th>
                    <th>Net Salary</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <th ><input class="Name" name="name" type="text"></th>
                    <th ><input class="Father_Name" name="fname" type="text"></th>
                    </th>
                    <th ><select class="Gender" name="gender" id="gender">select gender
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select></th>
                    <th ><input class="Employee_ID" name="id" type="text"></th>
                    <th><input  class="Email" name="mail" type="email"></th>
                    <th><input class="Date_of_join" name="date" type="date"></th>
                    <th><input class="Basic_Salary" name="salary" type="number"></th>
                    <th><input class="Allowances" name="allowance" type="number"></th>
                    <th ><input class="Net_Salary" name="netsalary" type="number"></th>
                    <th><button type="button" name="add" id="add" class="btn btn-success "><i
                                class="fa fa-user-plus"></i></button></th>
                </tr>
            </table>
            <div>
                <button type="button" name="submit" id="submit" class="btn btn-info">Submit</button>
            </div>
            <div id="inserted_item_data"></div>
        </div>
    </div>
</body>

<style>
    h2, th {
        text-align: center;
    }
    table, input {
        width: 100px
    }
    select, input, input:focus {
        outline: none;
        border: none;
    }
</style>
<script src="Js/jquery-3.6.1.min.js"></script>


<script>

    $(document).ready(function () {
        var count = 1;
        $('#add').click(function () {
            count = count + 1;
            var html_code = "<tr id='row" + count + "'>";
            html_code += "<th class='Name'> <input type='text'></th>";
            html_code += "<th class='Father_Name' ><input type='text'></th>";
            html_code += "<th class='Gender'><select name='gender' id='gender'>select gender <option value='male'>Male</option><option value='female'>Female</option></select></th>"
            html_code += "<th class='Employee_ID' ><input type='text'></th>"
            html_code += "<th class='Email'><input type='email'></th>"
            html_code += "<th class='Date_of_join' ><input type='date'></th>"
            html_code += "<th class='Basic_Salary'><input type='text'></th>"
            html_code += "<th class='Allowances'><input type='text'></th>"
            html_code += "<th class='Net_Salary'><input type='text' readonly></th>"
            html_code += "<th><button type='button' name='remove' data-row='row" + count + "' class='btn btn-danger remove '><i class='fa fa-trash'></i></button></th>"
            $('#crud_table').append(html_code)

        });
        $(document).on('click', '.remove', function () {
            var delete_row = $(this).data("row");
            $('#' + delete_row).remove();
        });
    });

    $("#submit").on("click", function(e){
        e.preventDefault();
        var Name = $(".Name").val();
        var Father_Name = $(".Father_Name").val();
        var Gender = $(".Gender").val();
        var Employee_ID = $(".Employee_ID").val();
        var Email = $(".Email").val();
        var Date_of_join = $(".Date_of_join").val();
        var Basic_Salary = $(".Basic_Salary").val();
        var Allowances = $(".Allowances").val();
        var Net_Salary = $(".Net_Salary").val();
 

        $.ajax({
            url: "insert.php",
            type: "POST",
            data: {name:Name, fname:Father_Name, gender:Gender, id:Employee_ID, mail:Email, date:Date_of_join, salary:Basic_Salary, allowance:Allowances, netsalary:Net_Salary},
            success: function(data){
            
                if(data == 1){
                    alert("Saved");
                }else{
                    alert("not save");
                }
            }
        })
   })
 
</script>
<script src="Js/jquery-3.6.1.min.js"></script>


</html>