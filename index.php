<?php 

session_start();

require_once('functions/fabs.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car</title>
</head>
<body>
    <?php
    if(isset($_SESSION['error_message'])) {
        echo '<p style="color: red;">' . $_SESSION['error_message'] . '</p>';
        unset($_SESSION['error_message']);
    }
    ?>
    <table border="1">
        <thead>
            <tr>
                <form action="adicionar_action.php" method="post">
                    <td>
                        <select name="fabrica">
                            <?php fabs(); ?>
                        </select>
                    </td>
                    <td>
                        <input type="text" name="modelo">
                    </td>
                    <td>
                        <input type="text" name="versao">
                    </td>
                    <td>
                        <input type="number" name="ano">
                    </td>
                    <td>
                        <input type="text" name="cor">
                    </td>
                    <td>
                        <input type="submit" value="Adicionar">
                    </td>
                </form>
            </tr>
            <tr>
                <th>Fábrica</th>
                <th>Modelo</th>
                <th>Versão</th>
                <th>Ano Fabricação</th>
                <th>Cor</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Fab</td>
                <td>Model</td>
                <td>Version</td>
                <td>Year</td>
                <td>Color</td>
            </tr>
        </tbody>
    </table>
</body>
</html>