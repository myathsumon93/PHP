<?php
/**
* Creating mini web page with bgcolor, title and header
* @param string $color
* @param string $title
* @param string $header
*/
function page_header( $color = '336699', $title = 'the page', $header = 'Welcome' ) {
	print '<html><head><title> Welcome to ' . $title . '</title></head>';
	print '<body bgcolor="#' . $color . '">';
	print "<h1>$header</h1>";
}
//page_header();
//page_header( '445577' );
//page_header( ' 88aaff', 'Home Page' );
page_header ( 'fa9900', 'Testing Page', 'Suprise!!!!' ); 
//page_header( '66cc99', 'Home', 'Welcome to function testing Page' );
print "\n";

/**
* Countdown function
* @param int $top
*/
function countdown( $top ) {
	while( $top > 0) {
		print "$top...";
		$top--;
	}
	print "BOOM!\n";
}
$count = 10;
countdown ( $count );

/**
* Calculating bill
* @param int $meal
* @param int $tax
* @param int $tip
* @return array 
*/
function r_check( $meal, $tax, $tip ) {
	$tax_amount = $meal * ( $tax / 100 );
	$tip_amount = $meal * ( $tip / 100 );
	$total_amount = $meal + $tax_amount + $tip_amount;
	$total_notip = $meal * ( $tax / 100 );
	$total_tip = $meal * ( $tip / 100 );
	return array( $total_amount, $total_notip, $total_tip );
}
$meal = 200;
$tax = 10;
$tap = 8;
$total = r_check( $meal, $tax, $tap );
print "<br>price is $total[0]\n";
if ( $total[0] > 200 ) {
	print 'pay by credit card';
	print '<br>';
}
else {
	print 'pay by cash';
	print '<br>';
}

/**
* Chosing payment method
* @param int $cash_on_hand
* @param int $amont
* @return string 
*/
function payment_method( $cash_on_hand, $amount ) {
	if ( $amount > $cash_on_hand ) {
	return 'credit card'; 
	}
	else {
	return 'cash';
	}
}
$method = payment_method(200, $total );
print 'I\'ll pay with ' . $method . '<br>';
if ( r_check( 1500, 8.25, 15 ) < 200 ) {
	print 'Less than $20, I can pay cash.';
}else {
	print 'Too expensive, I need my credit card.';
}

/**
* Payment calculation and chosing payment way
* @param int $meal
* @param int $tax
* @param int $tip
* @param int $cash_on_hand
* @return boolean
*/
function complete_bill( $meal, $tax, $tip, $cash_on_hand ) {
	$tax_amount = $meal * ( $tax / 100 );
	$tip_amount = $meal * ( $tip / 100 );
	$total_amount = $meal + $tax_amount + $tip_amount;
	if ( $total_amount > $cash_on_hand ) {
		return false;
	}
	else {
		return $total_amount;
	} 
}
if ( $total = complete_bill( 150.22, 8.25, 15, 20 ) ) {
	print "I'm happy to pay $total.";
}
else {
	print "<br>I don't have enough money. Shall I wash some dishes?<br>";
}

$dinner = 'Curry Cuttlefish';

/**
* Declaring global value in function
*/
function vegetarian_dinner() {
	print "Dinner is " . $GLOBALS['dinner'] . ", or ";
	$dinner = 'Sauteed Pea Shoots';
	print $dinner;
	print "\n"; }

/**
* Declaring global value in function
*/
function kosher_dinner() {
	global $dinner;
	print "Dinner is $dinner, or ";
	$dinner = 'Kung Pao Chicken';
	print $dinner;
	print "\n";
}
print "Vegetarian : <br>"; 
vegetarian_dinner();
print "Kosher : <br>";
kosher_dinner();
print "<br>Regular dinner is $dinner";
?>