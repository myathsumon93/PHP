<?php
include 'ch6_t2.php';
/**
* PHP creating subclass
*/
class PricedEntree extends Entree {

	/**
	 * Constuctor
	 * @param string $name, array $ingredients
	 */
	public function __construct( $name, $ingredients ) {
		parent::__construct( $name, $ingredients );
		foreach ( $this->ingredients as $ingredient ) {
			if ( ! $ingredient instanceof Ingredient ) {
				throw new Exception( 'Elements of' . $ingredients . 'must be Ingredient object' );
			}
		}
	}

	/**
	 * get cost function
	 * @return int $cost
	 */
	public function getCost() {
		$cost = 0;
		foreach ( $this->ingredients as $ingredient ) {
			$cost += $ingredient->getCost();
		}
		return $cost;
	}
}
?>
