<?php
echo strtotime( "now" ), "<br>";
echo strtotime( "10 September 2000" ), "<br>";
echo strtotime( "+1 day" ), "<br>";
echo strtotime( "+1 week" ), "<br>";
echo strtotime( "+1 week 2 days 4 hours 2 seconds" ), "<br>";
echo strtotime( "next Thursday" ), "<br>";
echo strtotime( "last Monday" ), "<br>";
echo '<br><br>';
if ( checkdate( 2, 29, 2020 ) ) {
	echo 'True';
} else {
	echo 'False';
}
echo '<br>';
var_dump( checkdate( 2, 29, 2026 ) );
echo '<br><br>';
$html = "<a href='fletch.html'>Stew's favorite movie.</a>\n";
echo htmlspecialchars($html);
echo '<br><br>';
echo htmlspecialchars($html, ENT_QUOTES);
echo '<br><br>';
echo htmlspecialchars($html, ENT_NOQUOTES);
echo '<br><br>';
echo __FILE__;
echo '<br><br>';
echo __DIR__;
?>
