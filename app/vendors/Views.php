<?php  

class View{

  public function render($link){
    if($link == "quetzal"){
      $view = "views/".$link.".view.php";
    }
    return $view;
  }
}

?>