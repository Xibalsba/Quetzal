<?php

require_once "Views.php";

class Quetzal{
  
  static public function fly(){
    if (isset($_GET["uri"])) {
      $link = $_GET["uri"];
    } else {
      $link = "quetzal";
    }
    $respuesta = View::render($link);
    include $respuesta;
  }
}

?>
