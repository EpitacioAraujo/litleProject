<?php

$id = $_GET['id'];

//VEÍCULO A SER EDITADO
$lista = json_decode(file_get_contents(__DIR__ . '/banco.json'), true);
$veiculo = $lista['veiculos'][$id];

//BOTÕES DE LOGIN E CADASTRO
$login       = !isset($_COOKIE['login']) ? '<a href="./includes/login.php" class="btn-action">login</a>' : '';
$btnCadastro = '';

if (isset($_POST['btnEditar'])) {
    $imagem = $veiculo['imagem'];
    if($_FILES['imagem']['name']){
        //DELETA A IMAGEM ANTIGA
        unlink(__DIR__.$veiculo['imagem']);

        //MOVE A IMAGEM PARA A PASTA 'IMAGES'
        $info = pathinfo($_FILES['imagem']['name']);
        $novoNome = date("Y-m-d-H-i-s").'.'.$info['extension'];
        $upload = move_uploaded_file($_FILES['imagem']['tmp_name'], './images/'.$novoNome);
        if($upload) $imagem = '/images'."/".$novoNome;
    }

    //MONTA OS CAMPOS DO NOVO VEÍCULO
    $novoVeiculo = [
        'modelo'     => trim($_POST['modelo']),
        'ano'        => trim($_POST['ano']),
        'marca'      => trim($_POST['marca']),
        'valor'      => trim($_POST['valor']),
        'observacao' => trim($_POST['observacao']),
        'imagem'     => $imagem
    ];

    //ARRAY COM OS DADOS ATUALIZADOS
    $lista['veiculos'][$id] = $novoVeiculo;
    $dados = [
        'admin'    => $lista['admin'],
        'veiculos' => $lista['veiculos']
    ];

    //TRANSFORMA EM JSON E ESCREVE OS NOVOS DADOS
    unlink(__DIR__.'/banco.json');
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
include __DIR__ . '/includes/form-editar.php';
