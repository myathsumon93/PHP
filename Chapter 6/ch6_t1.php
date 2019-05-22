<?php
/**
 * define a class and static method
 */
class Entree {
	public $name;
	public $ingredients = array();
	}
	/**
	 * check ingredient is contained or not
	 * @param array $ingredients
	 * @return boolean
	 */
	public function hasIngredient( $ingredient ) {
		return in_array( $ingredient, $this->ingredients );
	}
	/**
	 * Create static function
	 * @return array
	 */
	public static function getSizes() {
		return array( 'small', 'medium', 'large' );
	}
}
$soup = new Entree;
$soup->name = 'Chicken soup';
$soup->ingredients = array( 'chicken', 'water' );
$sandwich = new Entree;
$sandwich->name = 'Chicken sandwich';
$sandwich->ingredients = array( 'chicken', 'bread' );
foreach ( ['chicken', 'lemon', 'bread', 'water'] as $ing ) {
	if( $soup->hasIngredient( $ing) ) {
		print 'Soup contains ' . $ing;
	}
	if( $sandwich->hasIngredient( $ing ) ) {
		print 'Sandwich contains' . $ing . '<br>';
	}
}
$size = Entree::getSizes();
print 'size is ' . implode( ',', $size );
?>
