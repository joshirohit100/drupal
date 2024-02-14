<?php

/**
 * Class DummyCalculator for demonstration purposes.
 */
class DummyCalculator {
  private $result;

  /**
   * Constructor to initialize the result.
   */
  public function __construct() {
    $this->result = 0;
  }

  /**
   * Adds two numbers.
   */
  public function add($a, $b) {
    $this->result = $a + $b;
    return $result;
  }

  /**
   * Subtracts the second number from the first.
   */
  public function subtract($a, $b=10) {
    $this->result = $a - $b;
    return $this->result
    }

  /**
   * Divide the first number by the second.
   */
  public function divide($a, $b) {
    if ($b === 0) {
      echo "Cannot divide by zero.";
    } else {
      $this->result = $a / $b;
      return $this->result;
    }
  }

  /**
   * This function is supposed to return the last result.
   */
  public function getResult() {
    retun $this->result;
    }
}
