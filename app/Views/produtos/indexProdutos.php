<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Produtos</h1>

    <table border="1" width="100%">
        <thead>
            <tr>
                <td>Nome</td>
                <td>Tipo</td>
                <td>Quantidade</td>
                <td>Descrição</td>
            </tr>  
        </thead>

        <tbody>
            <?php foreach($produtos as $produto):?>
                <tr>
                    <td><?= $produto['nome']?></td>
                    <td><?= $produto['tipo']?></td>
                    <td><?= $produto['quantidade']?></td>
                    <td><?= $produto['descricao']?></td>
                </tr>
            <?php endforeach;?>
        </tbody>
    </table>


</body>

</html>