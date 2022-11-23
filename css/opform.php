<?php
// dados vindos do formulario de index .php
if(isset($_Post)['enviar'])); {
    $nome $ Post['txt-nome'];
    $email = $_post['txt-email'];
    $data_nasc = $_Post{'txt- data-nasc'};
    $data = new DateTime($dataT,'d-m-y');
    $data_nasc = date_format($data_nasc);
    $aluno = array ('nome'=$none,'email'=>$email, 'datan'=>$data_nasc);
    // chamada para gravar dados na tabela no banco
    
    //header('location:index.php');



}
?>