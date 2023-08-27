<?php

//echo statements
echo "<h1>Hello World!</h1>";
echo "<h3>Hi I am Sufia from Chittagong.</h3>";

//PHP variables
$student_name = "Sufia Afrin<br>"; 
$Institute = "Chittagong Mohila Polytechnic Institute<br>"; 
$Department = "CSE<br><br>";
echo $student_name,$Institute,$Department;


//data types
$a = 20.22;
$b = 40.33;
echo $a + $b;


//concatenation
$name = "Sufia";
$age = 20;
echo '<h3>I am '.$name.'. I am '.$age.' years old.<h3>';

//constant declaration
define ('roll' , '508');
echo roll;
?>
