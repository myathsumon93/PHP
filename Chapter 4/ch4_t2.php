<?php
$dinner=['Sweet corn and asparagus', 'lemon chicken', 'Braised bamboo fungus'];
for ( $i = 0; $i < count( $dinner ); $i++ ) {
    print "Dish no $i is $dinner[ $i ]";
    print "<br>";
}
$dinner=['Sweet corn and asparagus', 'lemon chicken','Braised bamboo fungus'];
foreach ( $dinner as $dish ) {
    print "  $dish";
    print "<br>";
}
print "<br><br>";
$meals = array(
    'Walnut Bun' => 1,
    'Cashew Nuts and White Mushrooms' => 4.95,
    'Dried Mulberries' => 3.00,
    'Eggplant with Chili Sauce' => 6.50,
    'Shrimp Puffs' => 0
);
$books = array( 
    "The Eater's Guide to Chinese Characters",
    "How to Cook and Eat in Chinese" );

if ( array_key_exists ( 'Shrimp Puffs', $meals ) ) {
    print "yes, we have shrimp puffs";
}
else {
    print "no, we don't have.";
}
if ( in_array( 3, $meals ) ) {
    print 'There is a $3 item.';
}
if ( in_array( "How to Cook and Eat in Chinese", $books) ) {
    print "We have How to Cook and Eat in Chinese";
}
if ( in_array( "the eater's guide to chinese characters", $books ) ) {
    print "We have the Eater's Guide to Chinese Characters.";
}
?>
