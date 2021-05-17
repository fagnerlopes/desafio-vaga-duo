<?php
  $duvidas = json_decode(file_get_contents("backend/duvidas.json"));
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Duo Studio Interativo</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;500;600;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./assets/css/custom.css">
</head>
<body>
  <header id="header">
    <nav id="nav">
        <div id="nav-left"></div>
        <div id="nav-right"></div>  
        <div id="nav-buttons">
          <div id="nav-buttons-left">
            <button class="btn btn-franqueado">
              <img src="./assets/images/icons/seja_franqueado.png" alt="">
              <p>Seja um franqueado</p>                
            </button>
            <button class="btn btn-consultor">
              <img src="./assets/images/icons/seja_consultor.png" alt="">
              <p>Seja um consultor(a)</p>
            </button>
            <button class="btn btn-comprar">                
              Quero comprar
            </button>
          </div>
          <div id="nav-buttons-rigth">
              <button class="btn btn-area-restrita">
                <img src="./assets/images/icons/area_restrita.png" alt="">
                <p>Área restrita</p>
              </button>            
          </div>
        </div>
      </nav>
      <div id="header-text" class="container">
        <h2>Dúvidas</h2>
        <p>
          <strong>Listamos aqui algumas dúvidas frequentes,</strong>
          caso sua dúvida não esteja aqui você pode entrar em contato conosco <a href="#">clicando aqui</a>
        </p>
      </div>      
  </header>
  <section class="container">
      <div class="accordion">
      <?php foreach($duvidas->lista_tarefas as $duvida): ?>              
        <div id="card-<?= $duvida->id ?>" class="card">          
            <div id="<?= $duvida->id ?>" class="card-header">              
                <button id="card-title-<?= $duvida->id ?>" class="card-title"><?= $duvida->titulo ?></button>
                <button id="card-icon-<?= $duvida->id ?>" class="card-icon"></button>                                    
            </div>
          <div id="card-body-<?= $duvida->id ?>" class="card-body">
          <?= $duvida->descricao ?>
          </div>
        </div>      
      <?php endforeach; ?>
      </div>
  </section>
  <footer id="footer"></footer>
  <script src="./assets/js/script.js"></script>
</body>
</html>