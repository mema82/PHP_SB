<!DOCTYPE html>
<html>
<head>
	<title>PHP, MySQL and Apache All in One - Practice</title>
</head>

<body>


<?php //Working with Loops

//While statement

$counter = 1;
while ($counter <= 12) {
	echo $counter." times 2 is ".($counter * 2)."<br />";

	$counter++;/*If this was not set then the loop would never end because the 
	expresssion would never resolve to false to jump out of the loop*/
}

?>

<hr>

<?php //do...while statement. This is executed BEFORE the truth test and not after it.


$num = 1;

do {
	echo "The number is: ".$num." <br />";

	$num++;
} while (($num > 200) && ($num < 400));
?>

<hr>

<?php //for loop

for ($counter =1; $counter<=12; $counter++) {
	echo $counter."times 2 is " .($counter *2). "<br />";
}
?>

<hr>

<?php /*Break statements: guards against the occurance of getting "undefined" when
a result is 0 by breaking out of the loop if the value of the counter/var is 0 */

$counter = -4;

for (; $counter <= 10; $counter++) {

	if ($counter == 0) {

		continue;
	}

	$temp = 4000/$counter;
	echo "4000 divided by ".$counter." is..." .$temp."<br />";
}
?>

<hr>

<?php //Nesting 2 for loops

echo "<table style=\"border: 1px solid #000;\"> \n";

for ($y=1; $y<=12; $y++) {

	echo "<tr> \n";

	for ($x=1; $x<=12; $x++) {

		echo "<td style=\"border: 1px solid #000; width: 25px;

		text-align: center; \">";

		echo ($x * $y);
		echo "</td> \n";
	}

	echo "</tr> \n";

}

echo "</table>";
?>

<hr>

<?php

$display_prices = true;
if ($display_prices) {
	?>
	<table border="1">
		<tr><td colspan="3">today's prices in dollars</td>$71.00</td></tr>
	</table>

	<hr>

	<?php
}
?>

</body>
</html>











