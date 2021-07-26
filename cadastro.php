<?php 

$arquivo = fopen(__DIR__.'/banco.json','r+');

//LISTA ANTIGA DE VEÍCULOS
$listaAntiga     = json_decode(file_get_contents(__DIR__.'/banco.json'),true);
$veiculosAntigos = $listaAntiga['veiculos'];

$_POST['imagem'] = '/images/car.png';

$novaLista = [...$veiculosAntigos,$_POST];

$dados = [
    'admin'    => $listaAntiga['admin'],
    'veiculos' => $novaLista
];

$dadosJson = json_encode($dados,JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

$sucesso = fwrite($arquivo,$dadosJson);

if(!$sucesso){
    echo '<script>alert("Houve um erro")</script>';
}

header('Location:/');



