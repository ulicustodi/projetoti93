<?php
include 'conecta php';
// criando a consulta filme 

$consultasql="SELECT * FROM filme ODER BY LACAMENTO DESC";
$filme -$conn->query($consultaSql);
$row = $filme();
$num_rows - $filme-> rowCount();
$lista=$conn->query($consultaSql);
$row =$lista->fetch()
$num_rows = $lista->rowCount();
?>
$list_class =
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="pt-BR">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filme</title>
    <form action="#" method="post">
        <div hidden>
            <label for="cod">codigo
                <input type="text" name="cod" id></label>
             </div>
        <div class="campo>"
    <button type="submit" name="btenviar">Enviar</button>
      <div class = "campo">
        <label for ="filme">FILME
        <input type="submt"

</head>
<body>
    
</body>
</html>





