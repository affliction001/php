<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
	<title>PHP</title>
</head>
<body>

<h3>Exersize 1</h3>
<p>
<?php
$age = 12;
$shoe_size = 13;

if ($age > $shoe_size) {
	print "Message 1.";
} elseif (($shoe_size++) && ($age > 20)) {
	print "Message 2.";
} else {
	print "Message 3.";
}

print "<br>Age: $age. Shoe Size: $shoe_size";
?>
</p>
<hr>

<h3>Exersize 2</h3>
<p>
<?php
$min_temperature = -50;
$max_temperature = 50;

while ($min_temperature <= $max_temperature) {
	printf("Fahrenheit: %.2f. Celsius: %.2f.<br>", $min_temperature, ($min_temperature - 32) * 5 / 9);
	++$min_temperature;
}
?>
</p>
<hr>

<h3>Exersize 3</h3>
<p>
<?php
$min_temperature = -50;
$max_temperature = 50;

for (; $min_temperature <= $max_temperature; $min_temperature++) {
	printf("Fahrenheit: %.2f. Celsius: %.2f.<br>", $min_temperature, ($min_temperature - 32) * 5 / 9);
}
?>
</p>
<hr>

</body>
</html>