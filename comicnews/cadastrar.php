
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div class="container">
          <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="line-corpo">
                    <h5 class="titulo"><span>Input Notícia</span></h5>
                </div>
                <div class="input-form wrapperbg">
                    <div class="form ">
                        <form class="login-form" action="processaDados.php" method="post" enctype="multipart/form-data">

                          <input type="text" name="titulo" id="titulo" placeholder="Título" value="" required="">

                          <input type="text" name="descricao" id="descricao" placeholder="Descrição" value="" required="">

                          <input type="file" name="fileToUpload" id="fileToUpload" placeholder="Imagem" value="" required="">

                          <input type="text" name="autor" id="autor" placeholder="Autor" value="" required="">
                            <button class="cancel" onclick="home()">Cancelar</button>
                            <button class="enviar" type="submit" name="button">Salvar</button>
                        </form>

                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
  </body>
  <script type="text/javascript">
    function home() {
      window.location = "http://localhost/comicnews/";
    }
  </script>
</html>
