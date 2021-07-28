<?php  

  setlocale(LC_MONETARY, 'pt_BR');
  $title = 'Revendedora';

  //OBTÉM A LISTA DE CARROS
  $veiculos = json_decode(file_get_contents(__DIR__.'/banco.json'),true);
  $veiculos = $veiculos['veiculos'];
  
  //BOTÕES DE LOGIN E CADASTRO
  $login       = !isset($_COOKIE['login']) ? '<a href="./includes/login.php" class="btn-action">login</a>' : '';
  $btnCadastro = isset($_COOKIE['login']) ? '<button id="open-register-car" class="btn-action me-5">Adicionar carro</button>' : '';

  //LISTAGEM DE VEÍCULOS
  $conteudo = '';
  foreach ($veiculos as $key => $value) {
      $conteudo .= '<div class="card col-sm-4" data-veiculo="modal-'.$key.'">
                      <img src="..'.$value['imagem'].'" class="card-img-top" alt="...">
                      <div class="card-body">
                          <h5 class="card-title">'.$value['modelo'].' '.$value['ano'].'</h5>
                          <strong>R$ '.number_format($value['valor'],2,',','.').'</strong>
                          <p class="card-text">'.$value['observacao'].'</p>
                      </div>
                    </div>';
  }

  //LISTAGEM DE MODAL LATERAL
  $modals = '';
  foreach ($veiculos as $key => $value) {
    $modals .= '<div class="description" data-modal="modal-'.$key.'">
                  <div class="description-header">
                      <button class="btn btn-default close" id="close-description">X</button>
                  </div>

                  <img src="..'.$value['imagem'].'" class="description-img-top" alt="...">
                      
                  <div class="description-body">
                      <div class="description-header mt-4">
                          <h4 class="description-title">'.$value['modelo'].'</h4>
                          <strong class="description-price">R$ '.number_format($value['valor'],2,',','.').'</strong>
                      </div>
                      <p class="description-text">'.$value['observacao'].'</p>
                  </div>
                  <button class="btn btn-danger form-control">Comprar!</button>
                </div>';
  }

  //ARQUIVOS COM O HTML
  include __DIR__.'/includes/header.php';
  include __DIR__.'/includes/listagem.php';
  

