<?php 

session_start();

require_once("functions/fabsEdit.php");

$id = htmlspecialchars($_GET['id']);
$arq = "data/cars.json";

$jsonData = file_get_contents($arq);
$data = json_decode($jsonData, true);

if ($data === null) {

    $_SESSION['error_message'] = "Erro: ao decodificar o JSON.";
    header("Location: index.php");
    exit;

}

$info = $data[$id];

?>

<form action="" method="post">
    <select name="fabrica">
        <?php
        
        $fabricaSelecionada = $info['fab']; // Valor da fábrica atual
        fabsEdit($fabricaSelecionada); // Gera as opções do select com a selecionada

        ?>
    </select>
    <input type="text" name="modelo" value="<?=$info['model'];?>">
    <input type="text" name="versao" value="<?=$info['version'];?>">
    <input type="number" name="ano" value="<?=$info['year'];?>">
    <input type="text" name="cor" value="<?=$info['color'];?>">
    <input type="submit" value="Adicionar">

</form>