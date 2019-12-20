<?php  

class View{

  public function render($link){
    if($link == "quetzal"){
      $view = "views/".$link.".view.php";
    }else{
      $view = "views/404.view.php";
    }
    return $view;
  }
}

?>