<?php

namespace Products {

  /**
   * Description of ProductClass
   *
   * @author debian
   */
  class ProductClass {

    private $name;
    private $price;

    public function __construct($name = null, $price = null) {
      $this->name = $name;
      $this->price = $price;
    }

  }

}