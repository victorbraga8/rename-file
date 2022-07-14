<?php 

	$path = "seuDiretorio/";
	$arquivos = scandir($path);
	$i=0;

	foreach($arquivos as $arquivo){
		if($i < 5 ){
			//Informe uma condicional caso seja necessário.
			if(strpos($arquivo, 'j') !== false){
	    		rename ($path.$arquivo, strtoupper($path.$arquivo));
	    		$i++;
			}
		}		
	}

 ?>