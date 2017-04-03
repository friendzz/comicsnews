<?php
require_once('dao/NoticiaDAO.php');
$noticia = new NoticiaDAO();
$noticias = $noticia->getNoticias();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Comics News</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
</head>
<body>
  <div class="container wrapperbg">
    <div class="line-corpo">
      <h5 class="titulo"><span>Comic News</span></h5>
    </div>
    <div class="row">
      <?php foreach ($noticias as $key => $n): ?>
        <div class="col-md-3">
          <div id="notice">
            <div class="notice-body">
              <div class="image-body">
                <a href="./visualizar.php?id=<?=$n->id; ?>">
                <img class="" src="<?=$n->img; ?>">
              </a>
              </div>
              <div class="call-body">
                <a href="./visualizar.php?id=<?=$n->id; ?>">
                  <h2><?=date('d/M/y', strtotime($n->data)); ?> publicado por <?=$n->autor; ?></h2>
                  <h1><?=$n->titulo; ?></h1>

                  <h3><?=substr($n->descricao, 0, 135); ?>...</h3>
                </a>
              </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
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
