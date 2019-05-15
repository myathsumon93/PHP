<?php
$vegetables = array(
	'corn' => 'yellow',
	'beet'=> 'red',
	'carrot' => 'orange'
);
$juice = [
	0 => 'apple',
	1 => 'mango'
];
$num = count( $vegetables );
print "count no: $num";
$meal = array( 
	'breakfast' => 'Walnut Bun',
	'lunch' => "chashwe Nut",
	'snack'=>'Mulberries',
	'dinner' => 'Eggplant'
);
print "<table>\n";
foreach ( $meal as $key => $value ) {
	print "<tr><td> $key </td><td> $value </td></tr>\n";
}
print '</table>';
print "<br><br>";
$rowstyle = array('even','odd');
$index = 0;
$meal = array(
	'breakfast' => 'Walnut Bun',
	'lunch' => 'chashwe Nut',
	'snack'=> 'Mulberries',
	'dinner' => 'Eggplant'
);
print "<table>\n";
foreach ( $meal as $key => $value ) {
	print '<tr class = "' . $rowstyle[ $index ] . '">';
	print "<td> $key </td><td> $value </td></tr>\n";
	$index = 1 - $index;
}
print '</table>';
print "<br><br>";
$d = ['breakfast','lunch','dinner'];
$total = count( $d );
echo "total count:";
echo $total;
print "<table>";
foreach( $meal as $key => $value ) {
	print '<tr class = "' . $rowstyle[ $index ] . '">';
	print "<td> $key </td><td> $value </td></tr>\n";
	$index = 1 - $index;
}
print "</table>";
print "<br><br>";
$meals = array(
	'walnut bun' => 1,
	'cashew nuts and white mushrooms' => 4.95,
	'Dried mulberries' => 3.00,
	'Eggplant with chili sauce' => 6.85
);
foreach ( $meals as $dish => $price ) { 
	$meals[ $dish ] = $meals[ $dish ] * 2;
}
foreach ( $meals as $dish => $price) {
	print "$dish ==> $price";
	print "<br>";
}
?>
