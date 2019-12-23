<?php
class DB{
  public static function getConnection(){
    $parameters = array('host'=>'localhost','dbname'=> 'ecoqozgalys','user'=>'root','pass'=>'');
    $p = "mysql:host={$parameters['host']};dbname={$parameters['dbname']}";
    $db = new PDO($p,$parameters['user'],$parameters['pass']);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
    return $db;
  }
}
?>
