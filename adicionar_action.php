<?php

session_start();

require_once "class/Car.php";
require_once "functions/adicionarAction.php";

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $carro = new Car;

    $carro->setFab(htmlspecialchars($_POST['fabrica']));
    $carro->setModel(htmlspecialchars($_POST['modelo']));
    $carro->setVersion(htmlspecialchars($_POST['versao']));
    $carro->setYear(htmlspecialchars(intval($_POST['ano'])));
    $carro->setColor(htmlspecialchars($_POST['cor']));

    if(!empty($carro->getFab() && $carro->getModel() && $carro->getVersion() && $carro->getYear() && $carro->getColor())) {
      
        adicionarAction($carro->getFab(), $carro->getModel(), $carro->getVersion(), $carro->getYear(), $carro->getColor());
        header("Location: index.php");
        exit;

    } else {

        $_SESSION['error_message'] = "Erro: preencha todos os dados.";    
        header("Location: index.php");
        exit();

    }

} else {

    $_SESSION['error_message'] = "Erro: método enviado pelo formulário não aceito.";    
    header("Location: index.php");
    exit();

}