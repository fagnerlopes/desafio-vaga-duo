<?php
  $pathFileJson = "backend/duvidas.json";
  if(!file_exists($pathFileJson)) {
    exit('Falha ao carregar os dados');
  }
  $duvidas = json_decode(file_get_contents("backend/duvidas.json"));

  include_once './includes/header.inc.php';
  include_once './includes/nav.inc.php';
?>

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

<?php
  include_once './includes/footer.inc.php';
?>