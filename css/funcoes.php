<?php
function geraCoeficienteParcela(float$taxa,int $periodo=1):float 
{
   return pow((1+($taxa/100)),$periodo)/ $periodo;
}
echo geraCoeficienteParcela(2.0, 6);
?>