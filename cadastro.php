<?php 

//INICIA A CONEXÃO COM O ARQUIVO
$arquivo = fopen(__DIR__.'/banco.json','r+');

//LISTA ANTIGA DE VEÍCULOS
$listaAntiga     = json_decode(file_get_contents(__DIR__.'/banco.json'),true);
$veiculosAntigos = $listaAntiga['veiculos'];

//MOVE A IMAGEM PARA A PASTA 'IMAGES'
$info = pathinfo($_FILES['imagem']['name']);
$novoNome = date("Y-m-d-H-i-s").'.'.$info['extension'];
$upload = move_uploaded_file($_FILES['imagem']['tmp_name'], './images/'.$novoNome);

if($upload){
    //MONTA OS CAMPOS DO NOVO VEÍCULO
    $veiculo = [
        'modelo'     => trim($_POST['modelo']),
        'ano'        => trim($_POST['ano']),
        'marca'      => trim($_POST['marca']),
        'valor'      => trim( $_POST['valor']),
        'observacao' => trim($_POST['observacao']),
        'imagem'     => '/images'."/".$novoNome
    ];

    //CONTATENA TODOS OS VEÍCULOS
    $novaLista = [...$veiculosAntigos, $veiculo];
    
    $dados = [
        'admin'    => $listaAntiga['admin'],
        'veiculos' => $novaLista
    ];
    
    //TRANSFORMA EM JSON E ESCREVE OS NOVOS DADOS
    $dadosJson = json_encode($dados,JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    
    $sucesso = fwrite($arquivo,$dadosJson);
    
    if(!$sucesso){
        echo '<script>alert("Houve um erro")</script>';
    }
    
    header('Location:/');
} else {
    echo '<script>alert("Houve um erro")</script>';
}





