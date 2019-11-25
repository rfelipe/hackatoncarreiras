<?php 
ini_set('memory_limit', '2048M');

$texto = strtoupper('ABRAHAM');
$nLetras=strlen($texto);
$listaValida= file('palavras.txt');
$anagrama=array();

$fatorial = array_product(range($nLetras, 1));
$fatmetade = ($fatorial)/4;

	function validaTexto($texto){
		if (preg_match("/^([a-zA-Z]+)$/", $texto)) {
		     return true;
		}
		else {
		    return false;
		}
	}

if(validaTexto($texto)){

	for($i=0;$i<$fatmetade;$i++){
		 $anagrama[$i]= str_shuffle($texto);
	}
	for($i=$fatmetade;$i<$fatmetade*2;$i++){
		 $anagrama[$i]= str_shuffle($texto);
	}
	for($i=$fatmetade*2;$i<$fatmetade*3;$i++){
		 $anagrama[$i]= str_shuffle($texto);
	}
	for($i=$fatmetade*3;$i<$fatmetade*4;$i++){
		 $anagrama[$i]= str_shuffle($texto);
	}
	$uniqueAnagrama=array_unique($anagrama);
	
	
	$tamanhoAnagrama = sizeof($uniqueAnagrama);
	$fmTamanho=($tamanhoAnagrama)/2;

	for($fm=0;$fm<$fmTamanho;$fm++){
		for ($x=0;$x<sizeof($listaValida);$x++) {
					
			$vallidar=substr($listaValida[$x], 0, -2);
			if(isset($uniqueAnagrama[$fm])){
			 if(strcmp($vallidar, $uniqueAnagrama[$fm]) == 0){
						echo $uniqueAnagrama[$fm].'<br>';
				}
			}
		}
	}
	for($fm=$fmTamanho;$fm<$tamanhoAnagrama;$fm++){
		for ($x=0;$x<sizeof($listaValida);$x++) {
					
			$vallidar=substr($listaValida[$x], 0, -2);
			if(isset($uniqueAnagrama[$fm])){
			 if(strcmp($vallidar, $uniqueAnagrama[$fm]) == 0){
						echo $uniqueAnagrama[$fm].'<br>';
				}
			}
		}
	}
 }else{
	echo "o texto nao pode ter caacter especiais";
}
?>