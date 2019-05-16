<?php
$specials = array(
	array('chestnut bun', 'walnut bun', 'peanut bun'),
	array('chestnut salad', 'walnut salad', 'peanut salad')
);
for ($i = 0, $num_specials = count( $specials ); $i < $num_specials; $i++) {
	for($j = 0, $num_sub = count( $specials[ $i ] ); $j < $num_sub; $j++) {
		print "Element [ $i ][ $j ] is " . $specials[ $i ][ $j ] . "<br>";
	}
}
?>
<br><br>

<?php
$specials = array(
	array('chestnut bun', 'walnut bun', 'peanut bun'),
	array('chestnut salad', 'walnut salad', 'peanut salad')
for ($i = 0, $num_specials = count( $specials ); $i < $num_specials; $i++) {
	for($j = 0, $num_sub = count( $specials[ $i ] ); $j < $num_sub; $j++) {
		print "Element [ $i ][ $j ] is {$specials[ $i ][ $j ]} <br>";
	}
}
?>
