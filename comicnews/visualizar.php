<?php
require_once('modelo/Noticia.php');
require_once('dao/NoticiaDAO.php');

$noticiaDetalhe = new Noticia();
$noticiaDetalhe->id = $_GET['id'];

$noticiaDAO = new NoticiaDAO();
$noticia = $noticiaDAO->detalhar($noticiaDetalhe);

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?=$noticia->titulo; ?> | Comics News</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-58e1b0874a51fb28"></script>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="destaque-body">
                    <div class="image-body-interna">
                        <img src="<?=$noticia->img; ?>">
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 ">
                <div class="text-body wrapperbg">
                <h1><?=$noticia->titulo; ?></h1>
                <a href="#"><h5> <?=date('d/M/y', strtotime($noticia->data)); ?> publicado por <?=$noticia->autor; ?></h5></a>
                    <div class="text-interna">
                      <p>
                        <?=$noticia->descricao; ?>
                      </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
  </body>
  <script
          src="https://code.jquery.com/jquery-3.2.1.js"
          integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
          crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
          integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
          crossorigin="anonymous"></script>

</html>
