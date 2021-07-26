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
      $conteudo .= '<div class="card col-sm-4">
                      <img src="..'.$value['imagem'].'" class="card-img-top" alt="...">
                      <div class="card-body">
                          <h5 class="card-title">'.$value['modelo'].' '.$value['ano'].'</h5>
                          <strong>R$ '.money_format('%i',$value['valor']).'</strong>
                          <p class="card-text">'.$value['observacao'].'</p>
                      </div>
                    </div>';
  }

  //ARQUIVOS COM O HTML
  include __DIR__.'/includes/header.php';
  include __DIR__.'/includes/listagem.php';
  

