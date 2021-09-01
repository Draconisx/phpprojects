<?php
echo 'exercício array<br>';
echo '<br>';
$num = [8,17,29,33,45,54];
$teste = 0;
foreach($num as $indice => $valor){
	if($valor>=$teste){
		$teste = $valor;
}

}
echo 'o maior valor é: <br>'.$teste;


echo '<hr>';
echo 'Exerciocio forit <br>';
/*declare um array com 3 notas e utilizando o foreach,
mostre la a media e se a media for maior q 6 imprimir aprovado se nao reprovado*/

$notas =[9,7,4];
$media = 0;
foreach($notas as $indice => $valor){
	$media = $media + $valor;
			
}
$media = $media/3;
if ($media > 6){
	echo 'Aprovado com a media de: <br>'.number_format($media, 1, ',', '.' );
	
}else{
	echo 'Reprovado com a media: <br>'.number_format($media, 1, ',', '.' );
}



?>

