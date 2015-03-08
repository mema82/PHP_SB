<?php //Practice with data types and casting

$practiceContainer = 33.6;

print $practiceContainer;


$holder = (boolean) $practiceContainer;
echo " is " .holder." a boolean? " . is_bool($holder); 




$holder = (boolean) $practiceContainer;
echo " is " .holder." a string? " . is_string($holder);