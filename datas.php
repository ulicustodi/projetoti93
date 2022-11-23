<?php
include 'config.php';
$dataAtual = new DateTime();

print_r($dataAtual);
echo '<br>';
echo $dataAtual->format('d/m/y');
echo '<br.';
 for ($i=1; $i < 3; $i++) {
    echo $i. 'a parcela - '.(new datetime('+'.$i.'month')) -> format('d/m/y');
  $dias += 30; // $dias = dias + 30;
    echo '<br>';
 }

 echo '<br>';
 $dataSistema = new datetime();
 $dataNasc   = new DateTime('1998/9/25');
 print_r($datenasc);
 echo '<br>';
 $intervalo = $dataNasc->diff($datasistema);
 print_r($intervalo);
 echo '<br>';
 echo $intervalo->format('% anos, meses e %d dias');
?>
 
 