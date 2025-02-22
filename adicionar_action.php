<?php

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {

} else {
    $_SESSION['error_message'] = "Erro: método enviado pelo formulário não aceito.";    
    header("Location: index.php");
    exit();
}