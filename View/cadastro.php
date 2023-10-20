<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    
    <script>
      function validaArquivo(campIMG) {
        var imagem = document.getElementById(campIMG);
        //console.log(imagem.files[0]);
        $maxFileSize = 2 * 1024 * 1024;
        
        if(imagem.files[0].size > $maxFileSize){
          alert("O arquivo excede o tamanho máximo permitido (2 MB).");
        }
      }
      //$(document).ready(function validaArquivo(campIMG){
      //  var imagem = document.getElementById('img');

      //  console.log(imagem.files);
      //});
    </script>
    <!--<div class="alert alert-warning alert-dismissible fade show" role="alert">
      <div id="mensagem"> </div>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>-->
    
    <div class="container"></div>
      <h1 class="mb-5 text-center">Formulário Centralizado</h1>
          <!-- Formulário centralizado required="true"-->
          <div class="row justify-content-center">
              <div class="col-md-6">
                <form id="form1" action="?page=salvar" enctype="multipart/form-data" method="POST">
                  <input type="hidden" name="acao" value="cadastrar">
                    <div class="mb-3 input-group input-group-lg">
                      <span class="input-group-text" id="title">Título</span>
                      <input type="text"  name="title" class="inputs required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                      <span class="span-required"></span>
                    </div>
                    <div class="mb-3 form-floating">
                      <textarea class="inputs required" required="true" placeholder="Leave a comment here" id="descricao" name="descricao" style="height: 100px"></textarea>
                      <label for="descricao">Descrição</label>
                    </div>
                    <div class="mb-3 form-group">
                      <label for="img" class="custom-file-label">Selecione uma imagem:</label>
                      <input type="file" accept=".jpg, .jpeg, .png" class="custom-file-input" id="img" onchange="validaArquivo('img')">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
          </div>
    </div>
</body>
</html>