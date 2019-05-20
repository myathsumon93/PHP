<?php
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
		return in_array( $ingredient, $this->ingredients);
	}
}

/**
* Extending the class
*/
class ComboMeal extends Entree {
	public function __construct( $name, $entrees ) {
		parent::__construct( $name, $entrees );
		foreach ( $entrees as $entree ) {
			if ( ! $entree instanceof Entree ) {
				throw new Exception( 'Elements of $entrees must be Entree objects' );
			}
		}
}
	public function hasIngredient( $ingredient ) {
		foreach ( $this->ingredients as $entree ) {
			if ( $entree->hasIngredient( $ingredient ) ) {
				return true;
			}
		}
		return false;
	}
}
$soup = new Entree( 'Chicken Soup', array('chicken', 'water' ) );
$sandwich = new Entree( 'Chicken sandwich', array( 'chicken', 'bread' ) );
$combo = new comboMeal( 'Soup + Sandwich', array( $soup, $sandwich ) );
foreach ( ['chicken', 'water', 'ppickles'] as $ing ) {
	if ( $combo->hasIngredient( $ing ) ) {
		print " $ing is contained in combo set.<br>";
	}
}
?>

