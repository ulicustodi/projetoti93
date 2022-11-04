<?php
// declaracao de variaveis
$anon = 1989
$anoa = 2022
$idade = $anoa - $anon;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="pt_BR">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>A idade do piao e</h1> ".$idade." </h3>;

    <?php
    $times = array();
    $times[0] = "Palmeiras";
    $times [1] = "Internacional";
    $times [2] = "flamengo";

    echo("<br>");
    prite_r($times);
    echo("<br>");
    foreach ($times as $time) {
        echo($time."<br>");
    }
        ?>
        <table>
            <th>id<th>

            <th>nome</th>
            <?php foreach ($times as $id => $nome) { ?>
                <tr>
                    <td><?php echo($id+1);?></td>
                    <td><?php echo($nome);></td>
                    <tr>
                    </tr>
                     
                </tr>
                <php } ?>
        </table>
</body> 
</html>
