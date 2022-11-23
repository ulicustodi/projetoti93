<?php
 // comentario de linha 
 # comentario de linha
/* comentario de bloco */

// declaracao de variaveis e matrizes - manipulacao de data 
$nome = "Ulisses";
$dataNasc = date("2003/05/20");
echo($nome. '-'.$datadanasc);
echo('<br>');
$hoje = date ('d/m/y h:i;s')
echo('<br>');
$data = new DateTime();
echo('<br>');
print_r($data);

// definindo time da timezone
defaut_timezone_sete('AmericaSaoPaulo');
$hoje = date ('d/m/y h:i;s'):
$hoje = date ('d/m/y h:i;s'):
$hoje = date ('D, d  M,Y'):
$hoje = date ('d/m/y h:i;s');
$teste = true;
$idade = 35;
$valor = 458.65;
$grana = 0;
// Estrutura de controle de decisao 
if (!($grana>0)) { // caso retorne verdaeiro
    echo('sacar grana!<br>');
}
// estrutra de repeticao 

// funçoes de configuracao.
if(isset['enviar'])){}
    $nome=$_Get['txt-data-nasc'];
     $email = $Get_['txt-email'];
     $data_nasc = $_Get['txt-data-nasc']
     $dataT = new DataTime($data_nasc);
     $date_nasc =date_format($dateT, 'd-M-Y');
      $aluno= array('nome=>$nome,email'=>$email, 'datan'=>$data_nasc);


     foreach ($aluno as$key => $value) {
        echo('h2'.$key.':'.$value.'</h3>');
     }





?> <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="pt_BR>
    <meta charset= "UTF-8">
    <meta http-equiv="refrech" content = "1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="#" method="get">
    <label for="txt" - nome ">
    Nome:<input type="text" name="valor-text" placeholder="digite o valor";
    Nome:< type="text" email name ="text-email" placeholder="digite o email...."required>
    <label><br>
    <label for=""></label>
    Data de Nascimento
    <imput type="date" name="txt"data-nasc" required>
    <label><br>
    <button type="submit" name=enviar>Enviar</button>
    </form>
    
</body>
</html>