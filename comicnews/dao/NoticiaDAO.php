<?php

require_once('util/Conexao.php');
require_once('modelo/Noticia.php');

class NoticiaDAO{
  public $listaNoticias;

public function testaConexao()
{

}

public function getNoticias()
{
  $conexao = new Conexao();
  $controlaConexao = $conexao->getConexao();

  $sql = "SELECT * FROM noticia LIMIT 20";
  $result = mysql_query($sql, $controlaConexao);
  $listaNoticias = array();
  while($noticiaBruta = mysql_fetch_array($result)) {
    $noticia = new Noticia();
    $noticia->id = $noticiaBruta['ID'];
    $noticia->titulo = $noticiaBruta['titulo'];
    $noticia->descricao = $noticiaBruta['descricao'];
    $noticia->img = $noticiaBruta['img'];
    $noticia->data = $noticiaBruta['data'];
    $noticia->autor = $noticiaBruta['autor'];
    array_push($listaNoticias, $noticia);
  }
  mysql_free_result($result);
  mysql_close($controlaConexao);
  return $listaNoticias;
}

public function inserir($noticia)
{
  $conexao = new Conexao();
  $controlaConexao = $conexao->getConexao();

  $sql = "INSERT INTO noticia (titulo, descricao, img, data, autor) VALUES
  (
    '{$noticia->titulo}',
    '{$noticia->descricao}',
    '{$noticia->img}',
    CURRENT_TIMESTAMP,
    '{$noticia->autor}'
 )";

  // $result = mysql_query($sql, $controlaConexao);
  mysql_query($sql, $controlaConexao);
  mysql_close($controlaConexao);

}

public function detalhar($noticia)
{
  $conexao = new Conexao();
  $controlaConexao = $conexao->getConexao();
  $sql = "SELECT * FROM noticia WHERE ID = {$noticia->id}";
  $result = mysql_query($sql, $controlaConexao);

  while($noticiaBruta = mysql_fetch_array($result)) {
    $noticia = new Noticia();
    $noticia->id = $noticiaBruta['ID'];
    $noticia->titulo = $noticiaBruta['titulo'];
    $noticia->descricao = $noticiaBruta['descricao'];
    $noticia->img = $noticiaBruta['img'];
    $noticia->data = $noticiaBruta['data'];
    $noticia->autor = $noticiaBruta['autor'];

  }
  mysql_free_result($result);
  mysql_close($controlaConexao);
  return $noticia;
}

}
