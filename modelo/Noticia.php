<?php


class Noticia{
  private $id;
  private $titulo;
  private $descricao;
  private $img;
  private $data;
  private $autor;

  function __construct() {
  }


  // public static function nNoticia($titulo, $descricao, $img, $autor) {
  //   $new = new Noticia();
  //   $new->titulo = $titulo;
  //   $new->descricao = $descricao;
  //   $new->img = $img;
  //   // $new->data = $data;
  //   $new->autor = $autor;
  // }

  public function __get($name) {
        switch (strtolower($name)){
            case 'id':
                return $this->id;
            case 'titulo':
                return $this->titulo;
            case 'descricao':
                return $this->descricao;
            case 'img':
                return $this->img;
            case 'data':
                return $this->data;
            case 'autor':
                return $this->autor;
        }
    }

    public function __set($name, $value) {
        switch (strtolower($name)){
            case 'id':
                $this->id = $value;
            case 'titulo':
                $this->titulo = $value;
            case 'descricao':
                $this->descricao = $value;
            case 'img':
                $this->img = $value;
            case 'data':
                $this->data = $value;
            case 'autor':
                $this->autor = $value;
        }
    }


}
