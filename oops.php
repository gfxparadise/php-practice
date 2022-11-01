<!-- oops object oriented programing style -->
<!-- in this we create template -->
<!-- Donot repeat your self  -->
<!-- creating class and object.  -->
<?php 

class worker{
    // properties
    public $name;
    public $work;

//     // method 
//     function set_name($name){
//         $this->name = $name;
//     }

//     function get_name(){
//         return $this->name;
//     }
// }
// // object manual
// $worker1 = new worker();
// $worker1->set_name("TGP");
// echo $worker1->get_name();

// Construct
function __construct($name, $work){
// construct argument
$this->name = $name;
$this->work = $work;
}

$GFX = new worker("manager" "GFX" );
$TGP = new worker("TGP" "astra" );

// echo "Worker name is $TGP->$name";
echo "Work as $TGP->$work";
echo "Worker name is $GFX->$name";
echo "Work as $GFX->$work";

?>