<?php


class lib {
	

	function modalInform($mensagem, $tipo){

//		(int) $tipo;
		$estilo = "";

		if($tipo === 1){ //Sucesso
			$estilo = "text-success";
		}else if($tipo === 2){ // Erro
			$estilo = "text-danger";
		}
//aria-labelledby='mySmallModalLabel' 
	echo "<div class='modal fade bd-example-modal-sm' id='modalInfo' aria-labelledby='' tabindex='-1' role='dialog' aria-hidden='true'>";
	echo "	<div class='modal-dialog modal-sm'>";
	echo "		<div class='modal-content'>";
//	echo "			<label class='".$estilo."'>".$mensagem."</label>";
	echo "		</div>";
	echo "	</div>";
	echo "</div>";		


	}

	function verificaInternet($site){


		if( fsockopen( $site , 80 , $errno , $errstr , 30 ) ){

//			$site_https = $site;
			return true;
//			echo "<label style='font-size: 20px; color: green; font-weigth: bold;'>Você está On-Line</label>";

		} else {
			return false;
//			$site_https = "localhost/portobellas";
//			echo "<label style='font-size: 20px; color: red; font-weigth: bold;'>Você está Off-Line</label>";
		}


	}

}