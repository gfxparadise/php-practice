
<?php
// Boolean - Can be either true or false
$x = true;
$is_friend = false;
echo var_dump($x);
echo "<br>";
echo var_dump($is_friend);
echo "<br>";

  // Array - Used to store multiple values in a single variable
$PF = array("AQ", "TGP", "GFX", "ABC");
echo var_dump($PF);
echo "<br>";
echo $PF[0];
echo "<br>";
echo $PF[1];
echo "<br>";
echo $PF[2];
echo "<br>";
echo $PF[3];
echo "<br>";

$m = true;
$n = false;

echo "For m and n, the result is "; 
echo var_dump($m and $n);
echo "<br>";

echo "For m && n, the result is "; 
echo var_dump($m && $n);
echo "<br>";
echo "For !m , the result is "; 
echo var_dump(!$m);
echo "<br>";
//echo $friends[4]; // will throw an error as the size of array is 4
?>


<?php  //-   Opening tag of a block

echo "hello" // echo is a command to print to the screen

;   //-  terminates the command

echo "<br>";

// if, else if, else 
$a = 50;
$b = 900;
if ($a > 50) {
  echo "happy";
}

elseif ($a < 50) {
  echo "crazy";
}

else{
  echo "unhappy";
}
echo "<br>";

$age = 40;

switch($age){
  case 2:
  echo "kid<br>";
    break;

  default:
    echo "old<br>";
    break;
}

// Loop Manual

echo 1;echo"<br>";

echo 2;echo "<br>";

echo 3;echo "<br>";

echo 4;echo "<br>";

echo 5;echo "<br>";

// loop automatic

$i = 80;

while($i<90){

    echo "The value of i is ";

    echo $i ;

    echo "<br>";

    $i+=2;

}

// For loop 

for ($index=1; $index < 6; $index++) {

  echo "The number is $index <br>";

}

echo "For loop has ended";

// do-while loop
$i=80;

do{

  echo "Printing $i";

  $i++;

}while($i<5);

// foreach loops

foreach ($PF as  $value) 
{
    echo "$value <br>";
}

// Calculation funtion 
function processcredit($AQ){
  $sum = 0;
  foreach ($AQ as $value) {
    $sum += $value;
  }
  return $sum;

}
echo "<br>";
$AQ = [9, 6, 2, 0, 8];
$sumcreditaq = processcredit($AQ);
echo "<br>";
$TGP = [90, 60, 20, 0, 80];
$sumcredittgp = processcredit($TGP);

echo " Paid credit is 10 out of $sumcreditaq";
echo"<br>";
echo " Paid credit is 10 out of $sumcredittgp";
echo "<br>";

// Date and time
// date
$D = date("d F Y");
echo "today's date is $D";
echo "<br>";
// time
$D = date(" h:i A");
echo "today's time is $D";

echo "<br>";

// Associated Array
$fav = array (
  'AQ'=>'green',
  'GP'=>'brown',
  9 => 'black'

);

// Associated array by name
echo $fav['AQ'];
echo "<br>";
echo $fav['9'];

// Associated array with name using foreach
// old foreach is different from this
foreach ($fav as $key => $value) {
 echo "<br> fav $key is $value <br>";
}

// multi diamentional array
// array in array 2 or more

$hi = array(array(1,2,3),
array(4,5,6),
array(7,8,9)
);
    // Array matrix
      for ($i=0; $i < count($hi); $i++) { 
        for ($k=0; $k < count($hi[$i]) ; $k++) { 
        echo $hi [$i][$k];
        echo " ";
                 }
      echo "<br>";}

// local and global variable
 $a  = 50 ;// Global variable
echo  $a;
echo "<br>";
function printvalue (){
  $a = 100; // local variable
  global $a; // when you want global variable in local after that if you write the variable change parmenantely
  $a = 5000;
  echo "value of a is $a";
 }

 printvalue();
 echo "<br>";
 echo  $a; //see parmenant change

?>