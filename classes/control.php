<?php

// MODELO XML

/* 


<?xml version='1.0' encoding='UTF-8'?> 
<vendas>
  <titulo>Arquivo de Venda</titulo>
  <data_atualizacao>22/08/2015</data_atualizacao>
  <venda>
    <cod_venda>001</cod_venda> 
    <cliente>João</cliente> 
    <email>joao@email.com</email> 
    <itens>
    	<item>
	    	<cod_produto>909</cod_produto>
	    	<qtde>12</qtde>
	    	<descricao>Produto 1</descricao>
	    </item>
	    <item>
	    	<cod_produto>910</cod_produto>
	    	<qtde>34</qtde>
	    	<descricao>Produto 2</descricao>
	    </item>
    </itens>
  </venda>
  <venda>
    <cod_venda>002</cod_venda> 
    <cliente>Pedro</cliente> 
    <email>pedro@email.com</email> 
    <itens>
    	<item>
	    	<cod_produto>300</cod_produto>
	    	<qtde>15</qtde>
	    	<descricao>Produto 3</descricao>
	    </item>
	    <item>
	    	<cod_produto>304</cod_produto>
	    	<qtde>19</qtde>
	    	<descricao>Produto 4</descricao>
	    </item>
    </itens>
  </venda>
</vendas>

*/
	function lerXML($arquivo){

		$arq = simplexml_load_file($arquivo);

// Exibe informações do XML

		echo "Título: ".$arq->titulo;
		echo "Data: ".$arq->data_atualizacao;

// Percorre todos os registros de vendas

		foreach($arq->venda as $registro):
			echo "Código da venda: ".$registro->cod_venda."<br>";
			echo "Cliente: ".$registro->cliente."<br>";
			echo "E-mail: ".$registro->email."<br>";

// Percorre todos os itens de venda

			foreach($registro->itens as $item):
				echo "Código do produto: ".$item->cod_produto."<br>";
				echo "Quantidade: ".$item->qtde."<br>";
				echo "Descrição do produto: ".$item->descricao."<br>";
			endforeach;

			echo "<hr>";

		endforeach;

	}

	function lerXML2(){

		// Atribui o conteúdo XML para variável
		$string = "<?xml version='1.0' encoding='UTF-8'?> 
		<vendas>
		  <titulo>Arquivo de Venda</titulo>
		  <data_atualizacao>22/08/2015</data_atualizacao>
		  <venda>
		    <cod_venda>001</cod_venda> 
		    <cliente>João</cliente> 
		    <email>joao@email.com</email> 
		    <itens>
		    	<item>
			    	<cod_produto>909</cod_produto>
			    	<qtde>12</qtde>
			    	<descricao>Produto 1</descricao>
			    </item>
			    <item>
			    	<cod_produto>910</cod_produto>
			    	<qtde>34</qtde>
			    	<descricao>Produto 2</descricao>
			    </item>
		    </itens>
		  </venda>
		  <venda>
		    <cod_venda>002</cod_venda> 
		    <cliente>Pedro</cliente> 
		    <email>pedro@email.com</email> 
		    <itens>
		    	<item>
			    	<cod_produto>300</cod_produto>
			    	<qtde>15</qtde>
			    	<descricao>Produto 3</descricao>
			    </item>
			    <item>
			    	<cod_produto>304</cod_produto>
			    	<qtde>19</qtde>
			    	<descricao>Produto 4</descricao>
			    </item>
		    </itens>
		  </venda>
		</vendas>";
		 
		 
		// Transformando o conteúdo XML da variável $string em Objeto
		$xml = simplexml_load_string($string);
		 
		// Exibe as informações do XML
		echo 'Título: ' . $xml->titulo . '<br>';
		echo 'Data de Atualização: ' . $xml->data_atualizacao . '<br>';
		 
		// Percorre todos os registros de vendas
		foreach($xml->venda as $registro):
			echo 'Código da Venda: ' . $registro->cod_venda . '<br>';
			echo 'Cliente: ' . $registro->cliente . '<br>';
			echo 'Email: ' . $registro->email . '<br>';
		 
			// Percorre todos os itens da venda
			foreach($registro->itens->item as $item):
				echo 'Código do Produto: ' . $item->cod_produto . '<br>';
				echo 'Quantidade: ' . $item->qtde . '<br>';
				echo 'Descrição do Produto: ' . $item->descricao . '<br>';
			endforeach;
		 
			echo '<hr>';
		endforeach;
		
	}

	function criaXML($cod_form, $dataEnvio, $nome, $email, $motivo, $mensagem, $ip, $navegador){

		//Criando o objeto
		/*
		$content = '<root>';
		$content .= '<nodeOne>valueOne</nodeOne>';
		$content .= '<nodeTwo>valueTwo</nodeTwo>';
		$content .= '</root>';
		 
		file_put_contents('filename.xml', $ontent);
		*/		

		$dom = new DOMDocument('1.0', 'UTF-8');
		//Nesse ponto, informamos para o objeto que não queremos espaços em branco no documento
		$dom->preserveWhiteSpaces 	= false;
		//Aqui, dizemos para o objeto que queremos gerar uma saída formatada
		$dom->formatOutput 			= true;
		//Pronto! Configurações inicias realizadas, agora partiremos para a criação dos elementos que compõe a árvore do documento XML
		//Criação do elemento root (elemento pai)
		$root 						= $dom->createElement('contato');
		//Vamos criar o elemento nodeOne, conforme o exemplo anterior
		$campo_codigo				= $dom->createElement('codigo');
		$campo_data					= $dom->createElement('data_envio');
		$campo_ip					= $dom->createElement('ip');
		$campo_navegador			= $dom->createElement('navegador');
		$campo_nome					= $dom->createElement('nome');
		$campo_email 				= $dom->createElement('email');
		$campo_motivo 				= $dom->createElement('motivo');
		$campo_mensagem				= $dom->createElement('mensagem');
		//criados os elementos, vamos adicionar um valor para cada um deles
		$campo_codigo_txt			= $dom->createTextNode($cod_form);
		$campo_data_txt				= $dom->createTextNode($dataEnvio);
		$campo_ip_txt				= $dom->createTextNode($ip);
		$campo_navegador_txt		= $dom->createTextNode($navegador);
		$campo_nome_txt				= $dom->createTextNode($nome);
		$campo_email_txt			= $dom->createTextNode($email);
		$campo_motivo_txt			= $dom->createTextNode($motivo);
		$campo_mensagem_txt			= $dom->createTextNode($mensagem);
		//Pronto! Elementos criados, o próximo passo é organizar essa bagunça, para isso, usaremos o método appendChild() e diremos quem é elemento pai e quem é elemento filho
		$campo_codigo->appendChild($campo_codigo_txt);
		$campo_data->appendChild($campo_data_txt);
		$campo_ip->appendChild($campo_ip_txt);
		$campo_navegador->appendChild($campo_navegador_txt);
		$campo_nome->appendChild($campo_nome_txt);
		$campo_email->appendChild($campo_email_txt);
		$campo_motivo->appendChild($campo_motivo_txt);
		$campo_mensagem->appendChild($campo_mensagem_txt);

		$root->appendChild($campo_codigo);
		$root->appendChild($campo_data);
		$root->appendChild($campo_ip);
		$root->appendChild($campo_navegador);
		$root->appendChild($campo_nome);
		$root->appendChild($campo_email);
		$root->appendChild($campo_motivo);
		$root->appendChild($campo_mensagem);

		$dom->appendChild($root);
		 
		//Dessa forma, dissemos que os elementos nodeOne e nodeTwo são filhos do elemento root, isto é, estão dentro de root ou um nível abaixo de root.
		 
		//Para imprimir na tela, utilizamos o método saveXML()
//		$dom->saveXML();
		 
		//Por fim, para salvarmos o documento, utilizamos o método save()
		$dom->save($cod_form.".xml");
		//unset($xml->data); // remove o elemento
	}

	function geraLink($cod_form, $email){
		//Pegaremos a data e o e-mail

		$site 	= "http://www.portobellas.com.br/fale-conosco/confirm.php";
		$result = "";
		$dt 	= date("Y-m-d");

		$result = $site."?mail=".$email."&a=".base64_encode($cod_form);

		return $result;

	}	