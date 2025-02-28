<?php

session_start();

function editarAction($fab, $model, $version, $year, $color, $id) {
    $arq = "data/cars.json";
    if(file_exists($arq)) {

        $jsonStr = file_get_contents($arq);
        $data = json_decode($jsonStr, true);

        if(isset($data[$id])) {
            $data[$id]["fab"] = $fab;
            $data[$id]["model"] = $model;
            $data[$id]["version"] = $version;
            $data[$id]["year"] = $year;
            $data[$id]["color"] = $color;
        }

        file_put_contents($arq, json_encode($data, JSON_PRETTY_PRINT));

    } else {

        $_SESSION['error_message'] = "Erro: arquivo de dados não encontrado. Adicione um novo carro para criar um arquivo."; 
        header("Location: index.php");
        exit();
    }
}