<?php $senha = 'b0L3t1n'; ?>
<!doctype html>
<html lang="en" data-bs-theme="auto">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <head><script src="/docs/5.3/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Offcanvas navbar template · Bootstrap v5.3</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/offcanvas-navbar/">

    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

<link href="/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }
      .color{
        color: black;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="offcanvas-navbar.css" rel="stylesheet">
  </head>
  <body class="bg-body-tertiary">
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
      </symbol>
      <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
      </symbol>
      <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
      </symbol>
      <symbol id="sun-fill" viewBox="0 0 16 16">
        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
      </symbol>
    </svg>

<main class="container">
  <div class="d-flex align-items-center p-3 my-3 text-white bg-purple rounded shadow-sm">
    <img class="me-3" src="http://intranet.graficadoexercito.eb.mil.br/images/GrafexLogo.png" alt="Gráfica do Exército" width="95" height="133">
    <div class="lh-1">
														<span class="portal-title-1 color">EXÉRCITO BRASILEIRO</span>
							<h1 class="portal-title corto color">Gráfica do Exército</h1>
							<span class="portal-description"></span>
    </div>
  </div>

  <div class="my-3 p-3 bg-body rounded shadow-sm">
  <a href="/../boletins" class="btn btn-secondary rounded-pill px-3" type="button">Voltar</button></a>
    <h6 class="border-bottom pb-2 mb-0">BOLETIN INTERNO</h6>
    <?php
if(isset($_POST['senha'])){
    if($_POST['senha'] == $senha){
      ?>
      <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Upload de PDF</title>
  </head>
  <body>
      <h2>Envio de Arquivo PDF</h2>
      <form action="1_inserir_inserir.php" method="post" enctype="multipart/form-data">
          <label for="pdfFile">Selecione um arquivo PDF:</label>
          <input class="btn btn-outline-secondary" type="file" name="pdfFile" id="pdfFile" accept=".pdf">
          <br><br>
          <input class="btn btn-primary w-100 py-2" type="submit" value="Enviar PDF">
      </form>
  </body>
  </html>
  
    <?php 
    }else{
      ?>
  
    <form action="1_inserir_inserir.php" method="POST">
   
    <div class="form-floating">
     <br>
    </div>
    <div class="form-floating">
      <input type="password" name="senha" class="form-control" placeholder="SENHA">
      <label for="floatingPassword">SENHA</label>
    </div>
    <b>Senha incorreta</b>
    <div class="form-check text-start my-3">
     <br>
    </div>
    <button class="btn btn-primary w-100 py-2" name="ENTRAR" type="submit">ENTRAR</button>
     </form>
    <?php 
    }
  }else{
    ?>

     <form action="1_inserir_inserir.php" method="POST">
     <div class="form-floating">
     <br>
    </div>
    <div class="form-floating">
      <input type="password" name="senha" class="form-control" placeholder="SENHA">
      <label for="floatingPassword">SENHA</label>
    </div>

    <div class="form-check text-start my-3">
     <br>
    </div>
    <button class="btn btn-primary w-100 py-2" name="ENTRAR" type="submit">ENTRAR</button>
    </form> 
    <?php 
  }
    ?>
    
  </div>

  
</main>
    <script src="offcanvas-navbar.js"></script></body>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</html>

<?php 
  
?>


<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['pdfFile'])) {
  // Verifica se o arquivo foi enviado sem erros
  if (isset($_FILES["pdfFile"]) && $_FILES["pdfFile"]["error"] == UPLOAD_ERR_OK) {
      $nomeArquivo = $_FILES["pdfFile"]["name"];
      
      $caminhoDestino = "../11_NOVEMBRO/" . $nomeArquivo; // Substitua "pasta_destino" pelo caminho da sua pasta de destino

      // Move o arquivo para o destino
      if (move_uploaded_file($_FILES["pdfFile"]["tmp_name"], $caminhoDestino)) {
          echo "O arquivo foi enviado com sucesso.";
      } else {
          echo "Ocorreu um erro ao mover o arquivo para o destino.";
      }
  } else {
    switch ($_FILES["pdfFile"]["error"]) {
      case UPLOAD_ERR_INI_SIZE:
          echo "O arquivo excede o tamanho máximo permitido pelo PHP.";
          break;
      case UPLOAD_ERR_FORM_SIZE:
          echo "O arquivo enviado excede o limite definido no formulário HTML.";
          break;
      case UPLOAD_ERR_PARTIAL:
          echo "O upload do arquivo foi apenas parcialmente concluído.";
          break;
      case UPLOAD_ERR_NO_FILE:
          echo "Nenhum arquivo foi enviado.";
          break;
      case UPLOAD_ERR_NO_TMP_DIR:
          echo "Faltando uma pasta temporária. Entre em contato com o administrador do servidor.";
          break;
      case UPLOAD_ERR_CANT_WRITE:
          echo "Falha ao gravar o arquivo no disco. Entre em contato com o administrador do servidor.";
          break;
      case UPLOAD_ERR_EXTENSION:
          echo "O upload do arquivo foi interrompido devido a uma extensão do PHP.";
          break;
      default:
          echo "Erro desconhecido no upload do arquivo.";
          break;
  }
  }
}


?>
