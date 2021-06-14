<?php

require_once "../phpmailer/src/PHPMailer.php";
require_once "../phpmailer/src/OAuth.php";
require_once "../phpmailer/src/SMTP.php";
require_once "../phpmailer/src/POP3.php";
require_once "../phpmailer/src/PHPMailerAutoload.php";

require_once "../classes/class.sendmessage.php";
require_once "../classes/control.php";

date_default_timezone_set('America/Sao_Paulo');

ini_set('display_errors', 0);
ini_set('log_errors', 1);
ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
ini_set('session.use_trans_sid', 0);
error_reporting(E_ALL);


ob_start();
session_start(); // Será usado para preencher o secure, para o captcha

$send = new sendmessage();

if($_POST){


$number_captcha		= filter_input(INPUT_POST, "capt");
$num_captcha_code	= filter_input(INPUT_POST, "captcha_code");

	if($number_captcha === $_SESSION['secure']){

		$ip 		= getenv("REMOTE_ADDR");
		$navegador 	= $_SERVER['HTTP_USER_AGENT'];

		$dataEnvio	= date('d/m/Y');
		$nome 		= filter_input(INPUT_POST, "nome");
		$email 		= filter_input(INPUT_POST, "email");
		$motivo 	= filter_input(INPUT_POST, "motivo");
		$mensagem 	= filter_input(INPUT_POST, "mensagem");


//		$codigo 	= geraCodigo($email);
		criaXML($number_captcha, $dataEnvio, $nome, $email, $motivo, $mensagem, $ip, $navegador);

		$link = geraLink($number_captcha, $email);
		// enviaConfirmacao($number_captcha, $link, $dataEnvio, $email)

		$send->enviaConfirmacao($number_captcha, $link, $dataEnvio, $email);
/*
		$send->setNome($nome);
		$send->setEmail($email);
		$send->setMotivo($motivo);
		$send->setMensagem($mensagem);
    	$send->setNavegador($navegador);
    	$send->setIp($ip);

    	$send->enviaMensagem();
    	*/

	}else{
		$erro = "errcaptcha";
		header("Location: ?send=".base64_encode($erro));
	}


} //Fecha o POST

// https://www.portobellas.com.br
function curl_info($url){
    $ch = curl_init();
    curl_setopt( $ch, CURLOPT_URL, $url );
    curl_setopt( $ch, CURLOPT_HEADER, 1);
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
    curl_setopt( $ch, CURLOPT_CONNECTTIMEOUT, $timeout );
    curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1 );

    $content = curl_exec( $ch );
    $info = curl_getinfo( $ch );

    return $info;
}

if( fsockopen( 'www.portobellas.com.br' , 80 , $errno , $errstr , 30 ) ){
	$site_https = "https://www.portobellas.com.br/";
//	echo "Está on-line";
} else {
	$site_https = " ";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1">
    <meta name="description" content="Porto Bellas Piscinas e Jardins é uma empresa de manutenção de piscinas e jardins, deixando a sua piscina limpa e o seu jardim florido com uma bela paisagem.">
    <meta name="author" content="Michel Pereira">
    <meta name="keywords" content="porto bellas manutenção piscinas jardins jardinagem paisagismo jardim peças venda fornecimento contato covid-19 covid19 coronavirus corona vírus coronavírus">
    <meta name="robots" content="porto, bellas, manutenção, piscinas, jardins, jardinagem, paisagismo, jardim, peças, venda, fornecimento, contato, covid-19, covid19, coronavirus, corona vírus, coronavírus">
    <meta name="googlebot" content="porto, bellas, manutenção, piscinas, jardins, jardinagem, paisagismo, jardim, peças, venda, fornecimento, contato, covid-19, covid19, coronavirus, corona vírus, coronavírus">

    <link rel="shortcut icon" href="<?php echo $site_https; ?>img/iconePortoBellas.ico">

    <title>Porto Bellas - Piscinas, Jardinagem e Paisagismo</title>

    <!-- Bootstrap Core CSS -->
    <?php

    	echo "<link href='".$site_https."css/bootstrap.min.css' rel='stylesheet' type='text/css'>";

    ?>

    <!-- Fonts -->
    <link href="<?php echo $site_https; ?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
<!--	<link rel="stylesheet" href="../css/font-awesome.min.css"> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 

	<link href="<?php echo $site_https; ?>css/animate.css" rel="stylesheet" />
<!--	<link href="../css/bootstrap-social.css" rel="stylesheet" /> -->

    <!-- Squad theme CSS -->
	<link href="<?php echo $site_https; ?>css/style.css" rel="stylesheet"> 
	<link href="<?php echo $site_https; ?>color/default.css" rel="stylesheet">
<!--	<link href="https://www.portobellas.com.br/css/stylecapt.css" rel="stylesheet"> -->

	<script type="text/javascript">
		
		function abreJanelaDownload(url){
			window.open(url, "_blank");
		}

//		function trocaCaptcha(){
//			document.getElementsById("captcha_code").innerHTML = "../assets/generate.php";
//		}

	</script>

    <script src="<?php echo $site_https; ?>js/scriptcapt.js"></script>

 	<link rel="stylesheet" href="<?php echo $site_https; ?>css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<!--	<script src='https://www.google.com/recaptcha/api.js?hl=pt-BR'></script> -->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
	<!-- Preloader -->
	<div id="preloader">
	  <div id="load"></div>
	</div>

    <nav class="navbar-custom navbar-fixed-top top-nav-collapse" role="navigation" style="background-color: #67b0d1;">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img src="<?php echo $site_https; ?>img/logoPortoBellas4.png" title="Porto Bellas" width="200" height="150" />
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="https://www.portobellas.com.br/">Home</a></li>
                    <li><a href="https://www.portobellas.com.br/?#about">Quem Somos</a></li>
                    <li><a href="https://www.portobellas.com.br/?#service">Serviços</a></li>
                    <li>
						<a href="https://www.portobellas.com.br/?#infoCovid" style="font-size: 24px; color: red; text-shadow: 0 0 8px #FFFF, 0 0 8px #fff" class="btn btn-light" alt="Informações sobre o Coronavirus" title="Informações sobre o Coronavirus">
				            COVID-19
						</a>
	                </li>
                    <li><a href="https://www.portobellas.com.br/?#carreira">Carreira</a></li>
                    <li class="active"><a href="https://www.portobellas.com.br/fale-conosco/">Contato</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div> <!-- /.container -->
    </nav>
	<!-- Section: contact -->
    <section id="contact" class="home-section text-center">
		<div class="heading-contact">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>CONTATO</h2>
					<i class="fa fa-2x fa-angle-down"></i>

					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="container">

			<div class="row">
				<div class="col-lg-2 col-lg-offset-5">
					<hr class="marginbot-50">
				</div>
			</div>
		    <div class="row">
		        <div class="col-lg-8">
		            <div class="boxed-grey">
		                <form id="contact-form" action="#" method="post"><!-- <?php //echo $_SERVER['PHP_SELF'] ?>-->
			                <div class="row">
			                    <div class="col-md-6">
			                        <div class="form-group">
			                            <label for="name">
			                                Nome</label>
			                            <input type="text" class="form-control" id="name" placeholder="Preencha o nome" required="required" name="nome" />
			                        </div>
			                        <div class="form-group">
			                            <label for="email">
			                                E-mail</label>
			                            <div class="input-group">
			                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
			                                </span>
			                                <input type="email" name="email" class="form-control" id="email" placeholder="Preencha o e-mail" required="required" /></div>
			                        </div>
			                        <div class="form-group">
			                            <label for="subject">
			                                Motivo</label>
			                            <select id="subject" name="motivo" class="form-control" required="required">
			                                <!--<option value="na" selected="">Selecione</option>-->
			                                <option value="Sugestões/ Elogios">Sugestões/ Elogio</option>
			                                <option value="Orçamento">Orçamento</option>
			                                <option value="Materiais">Fornecimento de Materiais</option>
			                                <option value="Reclamação">Reclamação</option>
			                            </select>
			                        </div>
			                    </div>
			                    <div class="col-md-6">
			                        <div class="form-group">
			                            <label for="name">
			                                Messagem
			                            </label>
			                            <textarea name="mensagem" id="message" class="form-control" rows="9" cols="25" required="required" placeholder="Messagem"></textarea>
			                        </div>
			                    </div>

			                    
			                    <div class="col-md-6"> <!-- CAPTCHA -->

		                        	<div class="form-group">
				                    	<div style="width: 97%; border: 1px solid #ccc; text-align: center; padding: 3px; margin-bottom: 13px;  background:#ffffff url(../img/piscinas1.jpg) center center no-repeat">
				                    		<img src="../assets/generate.php" id="captcha_code" name ="captcha_code">
		    		                	</div>
			                    	 		<input type="text" name="capt" id="capt" required class="form-control" placeholder="Insira o código">
		                    	 	</div>

			                    </div>
			                    <div class="col-md-12">
			                        <button type="submit" class="btn btn-skin pull-right" id="btnContactUs">
			                            Enviar
			                        </button>
			                    </div>
			                    <div class="col-md-12">
			                        &nbsp;
			                    </div>
			                    <div class="col-md-12">
								<?php

//								if(!$sock = fsockopen('www.google.com.br',80,$num,$error,5)){
//								   echo "Você está sem conexão a internet no momento. Verifique a sua conexão e tente mais tarde!";   
//								}

								$mens = filter_input(INPUT_GET, "send");
								$caract = filter_input(INPUT_GET, "c");

								if(base64_decode($mens) === "mok"){

									echo "<div class='alert alert-success' role='alert' style='font-weight: bold;'>";
									echo "	Enviamos um link para o seu e-mail com instruções para confirmação.";
									//echo "	Enviado com sucesso :) ! Agradecemos o seu contato !";
									echo "</div>";

	//								echo "<meta http-equiv = 'refresh' content = '10; url=../fale-conosco/'>";

								}else if (base64_decode($mens) === "merr"){

									if(base64_decode($caract) === "rcp"){
										
										echo "<div class='alert alert-danger' role='alert' style='font-weight: bold;'>";
										echo "	Houve um erro ao enviar :(. Motivo: Depois de preenchido, marque <i>Não sou robô</i> e clique em <i>Enviar</i>.";
										echo "</div>";

	//									echo "<meta http-equiv = 'refresh' content = '10;url=../fale-conosco/'>";
									}else{
										echo "<div class='alert alert-danger' role='alert' style='font-weight: bold;'>";
										echo "	Houve um erro ao enviar :( Motivo: ".utf8_encode(base64_decode($caract));
										echo "</div>";

										//echo "<meta http-equiv = 'refresh' content = '10; url=../fale-conosco/'>";
									}
								}else if(base64_decode($mens) === "errcaptcha"){
										echo "<div class='alert alert-danger' role='alert' style='font-weight: bold;'>";
										echo "	Captcha inválido :(. Preencha-os corretamente.";
										echo "</div>";

								}else if(base64_decode($mens) === "mcok"){
									echo "<div class='alert alert-success' role='alert' style='font-weight: bold;'>";
									echo "	Agradecemos a confirmação e o contato. Responderemos nos mais breve possível.";
									//echo "	Enviado com sucesso :) ! Agradecemos o seu contato !";
									echo "</div>";
								}


								?>
			                    </div>
			                </div>
		                </form>
		            </div>
		        </div>
				
				<div class="col-lg-4">
					<div class="widget-contact">
						<h5>Endereço</h5>
						
						<address>
						  <strong>Porto Bellas - Piscinas e Jardins</strong><br>
						  Rua Teodoro da Silva, 562/ 101 - Vila Isabel<br>
						  Rio de Janeiro, RJ, Brasil - CEP 20.560-005<br><br>
		                   	<abbr title="Phone" style="font-weight: bold; height: 5px;">Telefones:</abbr>
		                   	<div style="font-weight: bold;">
							    <br>(21) 96422-2002
<!--		                   		<br>(21) 3129-8939
		                   		<br>(21) 7876-6488
		                   		<br>(22) 7813-1648-->
		                   	</div>
		<!--                   	<br/>
		                                  <a href="https://wa.me/5521964222002" target="_blank">
		                                  	<img src="../img/btn_whatsapp.png" alt="Whatsapp" title="Whatsapp" width="32" height="32">
		                                  </a>-->
						</address>


		<!--
						<address>
						  <strong>E-mail</strong><br>
		                                  <a href="mailto:contato@portobellas.com.br">contato@portobellas.com.br</a>

						</address>	-->
						<address>
						  <strong>Estamos nas redes sociais</strong><br>
		                       	<ul class="company-social">
		                            <li class="social-facebook"><a href="https://www.facebook.com/PortoBellas" alt="Visite nossa página no Facebook !" title="Visite nossa página no Facebook !" target="_blank"><i class="fa fa-facebook"></i></a></li>
		                            <li class="social-twitter"><a href="https://www.twitter.com/BellasPorto" alt="Visite nossa página no Twitter !" title="Visite nossa página no Twitter !" target="_blank"><i class="fa fa-twitter"></i></a></li>
		                            <li class="social-whatsapp"><a href="https://wa.me/5521964222002" target="_blank"alt="Mande-nos uma mensagem no Whatsapp !" title="Mande-nos uma mensagem no Whatsapp !"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
		                            <!--<li class="social-dribble"><a href="#" target="_blank"><i class="fa fa-dribbble"></i></a></li>-->
		                            <!--<li class="social-google"><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>-->
		                        </ul>	
						</address>					
					
					</div>	
				</div>
		    </div>	<!-- fecha o row-->

		</div><!-- fecha o container -->
	</section>
	<!-- /Section: contact -->

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div class="wow shake" data-wow-delay="0.4s">
						<div class="page-scroll marginbot-30">
							<a href="../" id="totop" class="btn btn-circle">
								<i class="fa fa-angle-double-up animated"></i>
							</a>
						</div>
					</div>
					<p>&copy;Copyright 2015 - Porto Bellas. Todos os direitos reservados.</p>
					<p><a href="http://www.mapti.com.br" target="_blank" style="color: #fff;">Desenvolvido pelo MAPTI</a></p>
<!--					<p>Desenvolvido pelo <img src='../img/LogoMapTi150x200.png' title="MAPTI" alt="MAPTI" width="50" height="80"></p> -->
				</div>
			</div>	
		</div>
	</footer>

    <!-- Core JavaScript Files -->
    <script src="<?php echo $site_https; ?>js/jquery.min.js"></script>
    <script src="<?php echo $site_https; ?>js/bootstrap.min.js"></script>
    <script src="<?php echo $site_https; ?>js/jquery.easing.min.js"></script>	
	<script src="<?php echo $site_https; ?>js/jquery.scrollTo.js"></script>
	<script src="<?php echo $site_https; ?>js/wow.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo $site_https; ?>js/custom.js"></script>



</body>

</html>