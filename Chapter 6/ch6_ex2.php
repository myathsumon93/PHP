<?php
/**
 * set function that changes the cost of ingredient
 */
class Ingredient {
	protected $name;
	protected $cost;

	/**
	 * Constuctor
	 * @param string $name, int $cost
	 */
	public function __construct( $name, $cost ) {
		$this->name = $name;
		$this->cost = $cost;
	}

	public function getName() {
		return $this->name;
	}

	public function getCost() {
		return $this->cost;
	}

	public function setCost ( $cost ) {
		$this->cost = $cost;
	}
}
?>
