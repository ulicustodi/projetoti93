<?php
include 'cliente.php'
 $consultaSql = "SELECT * FROM cadastro de CLIENTES order by asc";
// consultando cadastro de clientes 
{
$nome = $_PST['nome'];
$cpf = $_POST['cpf']
$insertSql="insert cliente (nome,cpf) values('$nome','$cpf');";
$resultado = $conn->query($insertSql);
header('location:cliente.php')
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="pt-BR">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cliente</title>
</head>
<body>
    <form action="#" method="post">
        <div hidden>
            <label for="cod">codigo
                <input type="text" name="cod" id=""></label>
        </div>
        <div class="campo">
            <label for="nome">Nome
                <input type="text" nome="nome" id-""></label>
           </div>
           <div class="campo">
            <label for="cpf">CPF
                <input type="number" name="cpf" id=""></label>
                <div class="campo">
                    <button type="submit" name="bt-enviar">Enviar</button>
</div>
                    
</body>
</html>
