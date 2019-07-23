<?php
function bar_chart( $question, $answers ) {
	$colors = array( 0xFF6600, 0x009900, 0x3333CC, 0xFF0033, 0xFFFF00, 0x66FFFF, 0x9900CC );
	$total = array_sum( $answers[ 'votes' ] );
	$padding = 5;
	$line_width = 20;
	$scale = $line_width * 7.5;
	$bar_height = 10;
	$x = $y = $padding;
	$image = ImageCreateTrueColor( 150, 500 );
	ImageFilledRectangle( $image, 0, 0, 149, 499, 0xE0E0E0 );
	$black = 0x000000;
	$wrapped = explode( "\n" , wordwrap( $question, $line_width ) );
	foreach ( $wrapped as $line ) {
		ImageString( $image, 3, $x, $y , $line, $black );
		$y += 12;
	}
	$y += $padding;
	for ( $i = 0; $i < count( $answers[ 'answer' ] ); $i++ ) {
		$percent = sprintf( '%1.1f', 100 * $answers[ 'votes' ][ $i ] / $total );
		$bar = sprintf( '%d', $scale * $answers[ 'votes' ][ $i ]/ $total );
		$c = $i % count( $colors );
		$text_color = $colors[ $c ];
		ImageFilledRectangle( $image, $x, $y, $x + $bar, $y + $bar_height, $text_color );
		ImageString( $image, 3, $x + $bar + $padding, $y, '$percent%', $black);
		$y += 12;
		$wrapped = explode( "\n", wordwrap( $answers[ 'answer' ][ $i ], $line_width ) );
		foreach ( $wrapped as $line ) {
			ImageString( $image, 2, $x, $y, $line, $black );
			$y += 12;
		}
		$y += 7;
	}
	$chart = ImageCreateTrueColor( 150, $y );
	ImageCopy( $chart, $image, 0, 0, 0, 0, 150, $y );
	header ( 'Content-type: image/png' );
	ImagePNG( $chart );
	ImageDestroy( $image );
	ImageDestroy( $chart );
}
$question = 'What a piece of work is man?';
$answers[ 'answer' ][] = 'Noble in reason';
$answers[ 'votes' ][]  = 29;
$answers[ 'answer' ][] = 'Infinite in faculty';
$answers[ 'votes' ][]  = 22;
$answers[ 'answer' ][] = 'In form, in moving, how express and admirable';
$answers[ 'votes' ][]  = 59;
$answers[ 'answer' ][] = 'In action how like an angel';
$answers[ 'votes' ][]  = 45;
bar_chart( $question, $answers );
?>
