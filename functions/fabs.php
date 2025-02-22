<?php

function fabs() {

    $json = file_get_contents('data/fabs.json');
    $fabs = json_decode($json, true);

    if(is_array($fabs)) {
        foreach($fabs as $fab) {
            echo "<option>$fab</option>";
        }
    } else {
        echo "Erro ao carregar os dados.";
    }

}