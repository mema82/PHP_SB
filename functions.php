<!DOCTYPE html>
<html>
<head>
	<title>PHP, MySQL and Apache All in One - Practice</title>
</head>

<body>
<h2>Calling built-in functions... like abs()</h2>
	<?php
	$num = -321;
	$newnum = abs($num);

	echo $newnum;

	//prints "321" abs returns the ABSolutevalue of a number

	?>

	<hr>

	<h2>Declaring and calling a function</h2>

	<?php

	function bigHero(){

		echo "<h4>Are you satisfied with your care?</h4>";
	}

	bigHero();

   ?>

<h2>Declaring a function that requires an argument</h2>

<?php

function frozen($elsa){

	echo $elsa;
}

frozen("Do you wanna build a snowman?");


?>

<hr>

 <h2> Returning Values from User-Defined Functions</h2>

<?php
/*You may want to get the funtions output and pass to other functions.
A RETURN statement stops the execution of the function and sends the value 
back to the calling code.
*/

function addNums($firstnum, $secondnum){

	$result= $firstnum + $secondnum;
		return $result;
}

echo addNums(3,5);
//printed 8

?>

<hr>
<h2>Created my own playful function</h2>
<?php

function life($ribs, $dirt){

	$result= "human";
		return $result;
}

echo life();
//printed "human"

?>

<hr>






</body>
</html>