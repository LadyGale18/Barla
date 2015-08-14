<?php

namespace Recolector\quantity;

/**
 * Description of Recolector
 *
 * @author Duvier 
 */
class Recolector {
  private $quantity;

  public function __construct($quantity = null) {
    $this->quantity = $quantity;
  }
  function getQuantity() {
    return $this->quantity;
  }

  function setQuantity($quantity) {
    $this->quantity = $quantity;
  }
}
