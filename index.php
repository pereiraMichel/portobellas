<?php

//require("fonts/class.salt.php");
//require("phpmailer/src/phpmailer.php");

date_default_timezone_set('America/Sao_Paulo');

ini_set('display_errors', 0);
ini_set('log_errors', 1);
ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
ini_set('session.use_trans_sid', 0);
error_reporting(E_ALL);

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

if( fsockopen( 'www.google.com.br' , 80 , $errno , $errstr , 30 ) ){
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
    <meta name="keywords" content="porto bellas manutenção piscinas jardins jardinagem paisagismo jardim peças venda fornecimento">
    <meta name="robots" content="porto, bellas, manutenção, piscinas, jardins, jardinagem, paisagismo, jardim, peças, venda, fornecimento">
    <meta name="googlebot" content="porto, bellas, manutenção, piscinas, jardins, jardinagem, paisagismo, jardim, peças, venda, fornecimento">
<?php    echo "<link rel='shortcut icon' href='".$site_https."img/iconePortoBellas.ico'>"; ?>

    <title>Porto Bellas - Piscinas, Jardinagem e Paisagismo</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo $site_https; ?>css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="<?php echo $site_https; ?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo $site_https; ?>css/animate.css" rel="stylesheet" />
    <!-- Squad theme CSS -->
    <link href="<?php echo $site_https; ?>css/style.css" rel="stylesheet">
	<link href="<?php echo $site_https; ?>color/default.css" rel="stylesheet">

	<script type="text/javascript">
		
		function abreJanelaDownload(url){
			window.open(url, "_blank");
		}

	</script>

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
	<!-- Preloader -->
	<div id="preloader">
	  <div id="load"></div>
	</div>

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
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
                    <li class="active"><a href="#intro">Home</a></li>
                    <li><a href="#about">Quem Somos</a></li>
                    <li><a href="#service">Serviços</a></li>
                    <li>
						<a href="#infoCovid" style="font-size: 24px; color: red; text-shadow: 0 0 8px #FFFF, 0 0 8px #fff" class="btn btn-light" alt="Informações sobre o Coronavirus" title="Informações sobre o Coronavirus">
				            COVID-19
						</a>
	                </li>
                    <li><a href="#carreira">Carreira</a></li>
<!--                    <li><a href="#contact">Contato</a></li> -->
                    <li><a href="fale-conosco/">Contato</a></li>
                    <!--        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Example menu</a></li>
                                <li><a href="#">Example menu</a></li>
                                <li><a href="#">Example menu</a></li>
                              </ul>
                            </li>-->
                </ul>

            </div>

            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

	<!-- Section: intro -->
    <section id="intro" class="intro">
	
		<div class="slogan">
			<h2>BEM-VINDOS AO SITE DA <span class="text_color">PORTO BELLAS</span> </h2>
			<h4>CONHEÇA OS NOSSOS SERVIÇOS CLICANDO NO MENU ACIMA.</h4>
		</div>
		<div class="page-scroll">
			<a href="#service" class="btn btn-circle">
				<i class="fa fa-angle-double-down animated"></i>
			</a>
		</div>
    </section>
	<!-- /Section: intro -->

	<!-- Section: about -->
    <section id="about" class="home-section text-center">
		<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>QUEM SOMOS</h2>
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
            <div class="col-xs-12">
                <div class="wow bounceInUp" data-wow-delay="0.2s">
                    <div class="team boxed-grey">
                        Estamos sempre em busca de uma renovação no mercado, inclusive a excelência nos atendimentos, para transmitirmos confiança e tranquilidade.<br/>Contando com profissionais treinados e qualificados, atuantes com experiência no segmento há mais de 10 anos e se comprometendo com a satisfação dos nossos clientes.<br/>
                        Nossa satisfação é a satisfação de nossos clientes, pois nossa filosofia é a de <b>“Foco do cliente e não foco no cliente”</b>.<br/><br/>
                        <b>Atendemos residências, condomínios, clubes, academias e instituições de ensino.<br/><br/>

Fazemos a manutenção mensal, semanal e diário (conforme julgar necessário ou de acordo), trabalhamos a estabilização, Dureza e qualidade da água, assim como a verificação e limpeza do Filtro e pré-filtro já incluso em orçamento.

</b>
                    </div>
                </div>
            </div>

		</div>
	</section>
	<!-- /Section: about -->
	

	<!-- Section: services -->
    <section id="service" class="home-section text-center bg-gray">
		
		<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>SERVIÇOS</h2>
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
            <div class="col-sm-6 col-md-6">
				<div class="wow fadeInLeft" data-wow-delay="0.2s">
                <div class="service-box">
					<div class="service-icon">
                                            <img src="img/piscina2.jpg" alt="" />
					</div>
					<div class="service-desc">
						<h5>PISCINAS</h5>
                                                <p style="text-align: justify">
•	Manutenção e Conservação de Piscinas (Tratamento da água);<br/>
•	Fornecimento dos produtos químicos necessários à operacionalidade dos itens acima;<br/>
•	Limpeza de Filtro e pré-Filtro;<br/>
•	Limpeza do azulejo ou fibra e bordas da piscina. <br/>
•	Troca de areia de filtros;<br/>
•	Conserto de filtros pré-filtros, bombas etc.;<br/>
•	Locação de mão de obra especializada (Operadores de piscinas e guardiões de piscinas formados pelo Grupamento Marítimo do Corpo de Bombeiros e Operadores de piscinas com coformação e diplomas).<br/><br/>

Verificamos e atendemos aos seguintes itens básicos com aprofundamentos <b>bacteriológicos</b>:<br/>			 

•	<b>Alcalinidade –</b> O que é alcalinidade total? É a quantidade de carbonatos e hidróxidos existentes na água da piscina, onde sua deficiência produz corrosão e manchas nas partes metálicas e acessórios da piscina, dificulta o controle de pH e a não estabilização pode desregular o pH, proporcionando água turva, irritação nos olhos, nariz e garganta dos utilizadores e formação de incrustações nas paredes e acessórios da piscina;<br/>

•	<b>Ajuste do pH –</b> O que é pH? É uma medida de acidez ou alcalinidade da água, abaixo produzirá corrosão dos metais e acessórios da piscina, irritação nos olhos, nariz e garganta, acima turvação na água, formação de escamas ou incrustações, dificultando e retardando a eficácia do desinfetante encarregado de eliminar os micro-organismos da água. <br/>

•	<b>Cloro Livre –</b> é a quantidade de cloro disponível para matar os microrganismos na água, onde abaixo permite o crescimento de bactérias e algas na água e acima desconforto e situações desagradáveis ao bem estar. <br/>

•	<b>Acido Cianúrico –</b> Que contribuirá para eficiência dos produtos utilizados na estabilização da água, proporcionando conforto na utilização dos banhistas.<br/>

•	<b>Dureza –</b> A deficiência de Cálcio produz proliferação de insetos no tanque da piscina, Água Turva, Superfícies manchadas e formação de escamas.<br/>
•	<b>Obs.:</b> Reforçando que para atendimento a sua Piscina, ficará sob minha supervisão, sou profissional Formado em operador de Piscinas com fornecimento do nº de registro. Jardinagem pela Sociedade Nacional de Agricultura. Forneço contrato, diploma e recibo se necessário. Corpo docente de profissionais do <b>INEA</b> e <b>FEEMA (Engenheiro Químico, consultor em Operação e manutenção de Piscinas, Biólogo e Engenheiro Eletrônico) e (Engenheiro Agrônomo e Paisagista).</b>
</p>
					</div>
                </div>
				</div>
            </div>
			<div class="col-sm-6 col-md-6">
				<div class="wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-box">
					<div class="service-icon">
						<img src="img/paisagem2.jpg" alt="" />
					</div>
					<div class="service-desc">
						<h5>JARDINAGEM E PAISAGISMO</h5>
                                                <p style="text-align: justify">
<b>Paisagismo</b>:<br/>

•	Implantação, manutenção, Limpeza e Ornamentação com decoração;<br/>
•	Arranjos Decorativos (Vaso, Bacias, Cachepots);<br/>
•	Insumos e Acessórios em geral para seu jardim;<br/>
•	Terra adubada;<br/>
•	Fertilizantes;<br/>
•	Húmus;<br/>
•	Adubos.<br/><br/>

<b>Jardim</b>:<br/>

•	Mudas, Plantas e Flores com espécies diversificadas;<br/>
•	Arranjos Decorativos (Vaso, Bacias, Cachepots);<br/>
•	Insumos e Acessórios em geral para seu jardim;<br/>
•	Terra adubada;<br/>
•	Fertilizantes;<br/>
•	Húmus;<br/>
•	Adubos.<br/>
                                                </p>
					</div>
                </div>
				</div>
            </div>


        </div>		
		</div>
	</section>
	<!-- /Section: services -->
	
    <section id="carreira" class="home-section text-center">
		<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>CARREIRA</h2>
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
            <div class="col-xs-12">
                <div class="wow bounceInUp" data-wow-delay="0.2s">
                    <div class="team boxed-grey">
                        Se você é um profissional dedicado, dinâmico e honesto e deseja trabalhar na <b>Porto Bellas - Piscinas e Jardins</b>, envie o seu currículo para o e-mail<b> <a href="mailto:rh@portobellas.com.br">rh@portobellas.com.br</a></b>. No campo "Assunto", descreva o cargo desejado. O seu currículo será encaminhado ao responsável para análise.

</b>
                    </div>
                </div>
            </div>

		</div>
	</section>

    <section id="infoCovid" class="home-section text-center">
		<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2 style="color:red; color: red; text-shadow: 0 0 8px #FFFF, 0 0 8px #fff;">COVID-19</h2>
					<i class="fa fa-2x fa-angle-down"></i>

					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="container">

			<table border="0" width="100%">
				<tr>
					<td>
						<img src="img/corona.jpg" width="600" height="800">
					</td>
					<td valign="top" align="center">
						<label>Baixar a imagem</label><br>
						<a href="javascript:abreJanelaDownload('<?php echo $site_https; ?>img/corona.jpg')" download="Coronavirus">
							<img src="img/download.png" width="50" height="50">
						</a>
					</td>
				</tr>
			</table>


		</div> <!-- container -->
	</section>
	<!-- /Section: about -->

	

	<!-- Section: contact -->

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div class="wow shake" data-wow-delay="0.4s">
					<div class="page-scroll marginbot-30">
						<a href="#intro" id="totop" class="btn btn-circle">
							<i class="fa fa-angle-double-up animated"></i>
						</a>
					</div>
					</div>
					<p>&copy;Copyright 2015 - Porto Bellas. Todos os direitos reservados.</p>
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
