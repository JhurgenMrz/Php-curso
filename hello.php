<?php 
echo 'Hello PHP';


$arreglo = [

	'keyStr1' => 'lado',
	0 => 'ledo',

	'keyStr2' => 'lido',
	1 => 'lodo',
  2 => 'ludo',
  3 => 'Decirlo al revés lo dudo.',
  4 => '¡Qué trabajo me ha costado!',
];
echo $arreglo[2];
echo $arreglo[1];
echo $arreglo['keyStr2'];
echo $arreglo[0] ;
echo $arreglo['keyStr1'] ;
echo $arreglo[4] ;
?>
<h1>
<?php 
echo $arreglo['keyStr1'];
echo $arreglo[0]; 
echo $arreglo['keyStr2'];
echo $arreglo[1];
echo $arreglo[2] ;
echo $arreglo[3] ;
?>
</h1>