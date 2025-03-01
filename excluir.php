<?php

session_start();

$arq = "data/cars.json";

$jsonString = file_get_contents($arq);

$data = json_decode($jsonString, true);

if(!$data) {
    $_SESSION['error_message'] = "Erro: ao decodificar o JSON.";
    header("Location: index.php");
    exit;
}

$id = $_GET['id'];

if(isset($data[$id])) {
    unset($data[$id]);

    $novoData = [];
    $novoId = 1;

    foreach($data as $item) {
        $novoData[str_pad($novoId, 3, '0', STR_PAD_LEFT)] = $item;
        $novoId++;
    }

    $jsonNovo = json_encode($novoData, JSON_PRETTY_PRINT);

    file_put_contents($arq, $jsonNovo);

    header("Location: index.php");
    exit;
}

