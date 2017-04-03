<?php

class Conexao{

  public function getConexao()
  {
    $conecta = mysql_connect("localhost", "root", "") or print (mysql_error());
    mysql_select_db("comicsnews", $conecta) or print(mysql_error());
    return $conecta;
  }
}
