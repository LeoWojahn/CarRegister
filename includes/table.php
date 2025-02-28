<?php 

require_once('functions/fabs.php');

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

            <?php
            
            $arq = "data/cars.json";
            $infos = [];

            if(file_exists($arq)) {
                $arq = file_get_contents($arq);
                $infos = json_decode($arq, true);
            }

            foreach($infos as $id => $info) : 
            
            ?>
            <tr>
                <td><?=$info["fab"];?></td>
                <td><?=$info["model"];?></td>
                <td><?=$info["version"];?></td>
                <td><?=$info["year"];?></td>
                <td><?=$info["color"];?></td>
                <td><a href="editar.php?id=<?=$id;?>">Editar</a></td>
            </tr>
            <?php endforeach; ?>

        </tbody>
    </table>