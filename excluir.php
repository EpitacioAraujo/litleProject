<?php

$id = $_GET['id'];

//RECUPERA OS DADOS DO VEÍCULO
$lista = json_decode(file_get_contents(__DIR__ . '/banco.json'), true);
$veiculo = $lista['veiculos'][$id];

//BOTÕES DE LOGIN E CADASTRO
$login       = !isset($_COOKIE['login']) ? '<a href="./includes/login.php" class="btn-action">login</a>' : '';
$btnCadastro = isset($_COOKIE['login']) ? '<button id="open-register-car" class="btn-action me-5">Adicionar carro</button>' : '';

if (isset($_POST['btnExcluir'])) {
    //EXCLUI O VEÍCULO
    unset($lista['veiculos'][$id]);

    unlink(__DIR__.'/banco.json');

    $dados = [
        'admin'    => $lista['admin'],
        'veiculos' => $lista['veiculos']
    ];

    //TRANSFORMA EM JSON E ESCREVE OS NOVOS DADOS
    $arquivo = fopen(__DIR__ . '/banco.json', 'w+');
    $dadosJson = json_encode($dados, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    $sucesso = fwrite($arquivo, $dadosJson);
    fclose($arquivo);

    if (!$sucesso) {
        echo '<script>alert("Houve um erro")</script>';
    }
    header('Location:/');
}

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/form-excluir.php';
