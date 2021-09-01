<?php

echo '<hr>';
echo 'Tabuada<br>';
echo '<br>';
$tab = 2;

for($x=0;$x<=10;$x++){
	
	echo $tab.' x '.$x.' = '.($tab*$x).'<br>';
}
echo '<hr>';
echo 'Tabuada While <br>';
echo '<br>';
$x=0;
$tab =5;
while($x<=10){
	echo $tab.' x '.$x.' = '.($tab*$x).'<br>';
	$x++;
}
echo '<hr>';
echo 'Tabuada do 6 while DO<br>';
echo'<br>';
$x=0;
$tab =6;
do{
	echo $tab.' x '.$x.' = '.($tab*$x).'<br>';
	$x++;
	}while($x<=10);
	
echo '<hr>';
echo 'Tabuada foreach<br>';
echo '<br>';
$x=0;
$num =[0,1,2,3,4,5,6,7,8,9,10];
foreach ($num as $indice =>$valor){

	echo $tab.' x '.$valor.' = '.($tab*$valor).'<br>';
}	
	
?>