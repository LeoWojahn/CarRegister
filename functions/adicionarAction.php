<?php

function adicionarAction($fab, $model, $version, $year, $color) {
    $arq = "data/cars.json";
    if(file_exists($arq)) {

        $conteudo = file_get_contents($arq);
        $dados = json_decode($conteudo, true);

        if(!is_array($dados)) {
            $dados = [];
        }

    } else {

        $dados = [];

    }

    $novoId = str_pad(count($dados) + 1, 3, '0', STR_PAD_LEFT);

    $novoCarro = [
        "fab" => $fab,
        "model" => $model,
        "version" => $version,
        "year" => $year,
        "color" => $color
    ];

    $dados[$novoId] = $novoCarro;
    
    file_put_contents($arq, json_encode($dados, JSON_PRETTY_PRINT));

}