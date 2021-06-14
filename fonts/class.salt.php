<?php


class salt{


	function up(){

//		date_default_timezone_set('America/Sao_Paulo');

		$file = "../index.php";

		$data = date("d/m/Y H:i:s")." IP ".getenv("REMOTE_ADDR");
//		$data = date("d/m/Y H:i:s", fileatime($file)).". IP ".getenv("REMOTE_ADDR");

		if(file_exists($file)){

			$mensagem = "O arquivo teve o último acesso em: ".$data."\n";
			//$msg = sprintf( "[%s] [%s]: %s%s", $mensagem, PHP_EOL );

			$this->geraLog(date('Y-m-d'), $mensagem);
			//$this->geraTexto(date('Y-m-d'), $mensagem);

		}

	}

	function geraLog($file, $msg){

		chmod($file, 0644);
		file_put_contents($file, $msg, FILE_APPEND );
		clearstatcache();

	}

	public function permissao(){

		// Read and write for owner, nothing for everybody else
		chmod("test.txt",0600);

		// Read and write for owner, read for everybody else
		chmod("test.txt",0644);

		// Everything for owner, read and execute for everybody else
		chmod("test.txt",0755);

		// Everything for owner, read for owner's group
		chmod("test.txt",0740);		
	}

	function geraTexto($file, $content){
	    $fp = fopen($file, 'w');
	    fwrite($fp, $content);
	    fclose($fp);

	    // Set perms with chmod()
	    chmod($file, 0777);
	    return true;
	}


}

