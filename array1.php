<?php
echo 'array<br>';
echo '<hr>';
$nomes = array('Thaisa','Guilherme','Aline','Weiglas');
/*echo $nomes[0].'<br>';
echo $nomes[1].'<br>';
echo $nomes[2].'<br>';
echo $nomes[3].'<br>';*/
echo '<pre>';
print_r($nomes);
echo '</pre>';
echo '<hr>';
$regist = ['nome'=>'Thaisa','Endereço'=>'Rua josé','cidade'=>'São Joaquim da Barra'];
echo '<pre>';
print_r($regist);
echo $regist['nome'];
?>