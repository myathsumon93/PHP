<?php
$dimsum = array('Chicken Bun','Stuffed Duck Web','Turnip Cake'); 
$menu = implode(', ', $dimsum);
print $menu;

print "<br>";

print '<tr><td>' . implode('</td><td>',$dimsum) . '</td></tr>';
?>
<?php
$fish = 'Bass, Carp, Pike, Flounder';
 $fish_list = explode(', ', $fish);
print "The second fish is $fish_list[1]";

?>

<?php

$dinner = array('Sweet Corn and Asparagus', 'Lemon Chicken',
'Braised Bamboo Fungus'); $meal = array('breakfast' => 'Walnut Bun',
              'lunch' => 'Cashew Nuts and White Mushrooms',
              'snack' => 'Dried Mulberries',
              'dinner' => 'Eggplant with Chili Sauce');
print "Before Sorting:\n";
print "<br>";
foreach ($dinner as $key => $value) {
print " \$dinner: $key $value\n";
print "<br>"; }
foreach ($meal as $key => $value) { print" \$meal:$key$value\n";
print "<br>";
}
sort($dinner);
sort($meal);
print "After Sorting:\n";
print "<br>";
foreach ($dinner as $key => $value) {
print " \$dinner: $key $value\n"; }
foreach ($meal as $key => $value) { print "\$meal:$key$value\n";
print "<br>";
}

?>
