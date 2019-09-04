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
print 'How are you?';
print '<br>';
print 'I\'m fine.';
print '<br>';
?>
</p>
<hr>

<h3>Exersize 2</h3>
<p>
<?php
$hamburger = 4.95; // $
$milkshake = 1.95; // $
$cola = 0.85; // $
$tax = 7.5; // %
$tip = 16; // %
$hamburger_count = 2;
$milkshake_count = 1;
$cola_count = 1;

$total_coast = ($hamburger_count * $hamburger) + ($milkshake_count * $milkshake) + ($cola_count * $cola);
$coast_without_tax = $total_coast - (100 / ($total_coast * $tax));
$tax_amount = $total_coast - $coast_without_tax;
$total_coast_with_tip = $total_coast + ($total_coast * ($tip / 100));

$price = "<ul>
		<li>Total coast: %.2f $</li>
		<li>Total coast without tax: %.2f $</li>
		<li>Tax amount: %.2f $</li>
		<li>Total coast with tip: %.2f $</li>
	</ul>";

printf($price, $total_coast, $coast_without_tax, $tax_amount, $total_coast_with_tip);
?>
</p>
<hr>

<h3>Exersize 3</h3>
<p>
<?php
$str1 = 'one';
$str2 = 'two';
$str3 = $str1 . ' ' . $str2;

print $str3;
print '<br>';
print strlen($str3);
?>
</p>
<hr>

<h3>Exersize 4</h3>
<p>
<?php
$number = 1;
print $number;
print '<br>';
print ++$number;
print '<br>';
print ++$number;
print '<br>';
print ++$number;
print '<br>';
print ++$number;
print '<br><br>';

$n = 2;
$p = 1;
print $n**$p;
print '<br>';
print $n**(++$p);
print '<br>';
print $n**(++$p);
print '<br>';
print $n**(++$p);
print '<br>';
print $n**(++$p);
?>	
</p>
<hr>

</body>
</html>