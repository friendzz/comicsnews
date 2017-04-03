<?php

  require_once('modelo/Noticia.php');
  require_once('dao/NoticiaDAO.php');

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
echo $target_file;
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
if (file_exists($target_file)) {
    echo "Imagem já existe no diretório.";
    $uploadOk = 0;
}
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Imagem muito pesada.";
    $uploadOk = 0;
}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Apenas JPG, JPEG, PNG & GIF";
    $uploadOk = 0;
}

if ($uploadOk == 0) {
    echo "Ocorreu um erro";
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Ocorreu um erro";
    }
}
$noticia = new Noticia();
$noticia->titulo = $_POST['titulo'];
$noticia->descricao = $_POST['descricao'];
$noticia->img = $target_file;
$noticia->autor = $_POST['autor'];
$noticiaDAO = new NoticiaDAO();
$noticiaDAO->inserir($noticia);

header("Location: http://localhost/comicnews/cadastrar.php");
