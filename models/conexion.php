<?php

class Conexion

{
  static public function conectar()
  {
        $link = new PDO("mysql:host=localhost;dbname=asimex_os_","root",""); #Name Conexion
        $link->exec("set names utf8");
        return $link;
  }
}
?>