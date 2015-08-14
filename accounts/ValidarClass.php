<?php

namespace Validar\Usuario1 {

  /**
   * Description of ValidarClass
   *
   * @author Duvier
   */
  class ValidarClass {

    public $User;
    public $Password;

    function __construct($User = null, $Password = NULL) {
      $this->User = $User;
      $this->Password = $Password;
    }

    function Validar() {
      if ($this->User == 'Gato' and $this->Password == "123") {
        header('Location: ../main/MainMenu.php?ClaveCorrecta=true');
      } else {
        header('Location: ../index.php?ClaveCorrecta=false');
      }
    }

  }

}