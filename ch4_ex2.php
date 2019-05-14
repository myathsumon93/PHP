<!-- Chapter 4 exercise 2 -->
<!-- Sorting with values -->
<?php
$city = array(
	'New York, NY'     => 8175133,
	'Los Angleles, CA' => 3792621,
	'Chicago, IL, '    => 2695598,
	'Houston, TX'      => 2100263,
	'Philadelphia, PA' => 1526006,
	'PHoenix, AZ'      => 1455632,
	'San Antonio, TX'  => 1327402,
	'San Diego, CA'    => 1307402,
	'Dallas, TX'       => 1197816,
	'San Jose, CA'     => 945942
);
$total = array_sum($city);
asort( $city );
print "Sorting with value : <br>";
print "<table>\n";
print "<tr><td> Location </td><td> Populations </td><tr>\n";
foreach ($city as $key => $value) {
        print "<tr><td> $key </td> <td> " . number_format($value) . " </td></tr>\n";
}
print "<tr><td> Total </td><td> " . number_format( $total ) . " </td></tr>\n";
print "</table>";
print "<br><br><br>";
// Sorting with key
ksort( $city );
print "Sorting with key : <br>";
print "<table>\n";
print "<tr><td> Location </td><td> Populations </td><tr>\n";
foreach ($city as $key => $value) {
        print "<tr><td> $key </td> <td> " . number_format($value) . " </td></tr>\n";
}
print "<tr><td> Total </td><td> " . number_format( $total ) . " </td></tr>\n";
print "</table>";
?>
