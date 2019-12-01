<?php

class Conexion

{
  static public function conectar()
  {
        $link = new PDO("mysql:host=localhost;dbname=erpsolut_sisbd","erpsolut_root","a}Lm$1W^?2u%"); #Name Conexion
        $link->exec("set names utf8");
        return $link;
  }
}
?>