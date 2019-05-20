<?php
/**
 * initializing an object with a constructor and throw exception
 */
class Entree {
	private $name;
	protected $ingredients = array();

	/**
	 * Constructor
	 * @param string $name;
	 * @param array $ingredients
	 */
	public function __construct( $name, $ingredients ) {
		if ( ! is_array( $ingredients ) ) {
			throw new Exception( '$ingredients must be an array' );
		}
		$this->name = $name;
		$this->ingredients = $ingredients;
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

try {
	$soup = new Entree( 'Chicken soup', 'water');
	if ($soup->hasIngredient( 'milk' ) ){
		print 'yummy!!!';
	}
} catch ( Exception $e ) {
	print "Could not create the meal : " . $e->getMessage();
}
$sandwich = new Entree( 'Chicken sandwich', array( 'chicken', 'bread' ) );
?>
