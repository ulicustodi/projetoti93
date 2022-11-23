<?php

use JetBrains\PhpStorm\Internal\ReturnTypeContract;

function geraCoeficienteParcela(float$taxa,int $periodo=1):float 
{
   return pow((1+($taxa/100)),$periodo)/ $periodo;
}
echo geraCoeficienteParcela(2.0, 6);

{ function validadeMatricula(datetime $data)
    $diff = $data->diff(new datetime)
    print-r($diff);
}
validadeMatricula(new datetime());
$anos = $diff->format('%y');
if ($anos < 6){
    return'nao pode fazer a matricula';
else{
    return 'pode matricular o aluno'
}
 echo Recebedata_nasc



?>