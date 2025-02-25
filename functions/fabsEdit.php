<?php

function fabsEdit($fabricaSelecionada = null) {

    $json = file_get_contents('data/fabs.json');
    $fabs = json_decode($json, true);

    if(is_array($fabs)) {
        
        foreach($fabs as $fab) {
            
            $selected = ($fab === $fabricaSelecionada) ? 'selected' : '';
            echo "<option value=\"$fab\" $selected>$fab</option>";

        }

    } else {
        echo "Erro ao carregar os dados.";
    }

}
