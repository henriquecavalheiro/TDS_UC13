<?php

    require_once "pessoas_model.php";
    $dados_clientes = pegar_dados();

?>

<body>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Idade</th>
            <th scope="col">Estado</th>
            
        </tr>
        </thead>

        <tbody>
            <?php foreach ($item as $dados_clientes) { ?>

                <tr>
                    <td><?php echo $item['nome']; ?></td>
                    <td><?php echo $item['idade']; ?></td>
                    <td><?php echo $item['estado']; ?></td>
                </tr>

                <?php } ?>

        </tbody> 
        
    </table>
            </body>
            