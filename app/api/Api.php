<?php
require_once "../vendors/Database.php";

class Api extends Conexion{
  public function consulta($action){
    switch ($action) {
      case 'index':
        // $consulta = Conexion::query("SELECT * FROM table");
        break;
      case 'insert':
        // $consulta = Conexion::query("INSERT INTO table (value,value2,value3) VALUES (:value,:value2,:value3)", ['value'=>$_POST["value"],'vallue2'=>value2,'value3'=>value3]);
        break;
      case 'update':
        // $consulta = Conexion::query("UPDATE table SET value=:value,value2=:value2,value3=:value3 WHERE value4=:value4", ['value'=>value,'value2'=>value2,'value3'=>value3,'value4'=>value4]);
        break;
      case 'delete':
        // $consulta = Conexion::query("DELETE FROM table WHERE value=:value",['value'=>value]);
        break;
      default:
        break;
    }
    echo json_encode($consulta);
  }
}
if(isset($_GET["action"])){
  $usuarios = Usuarios::consulta($_GET["action"]);
}
