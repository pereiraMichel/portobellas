<?php


class lib{
	

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


	// **********************************************LINGUAGEM "PORCA"

	/*
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
                <form id="contact-form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
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
                                Messagem</label>
                            <textarea name="mensagem" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Messagem"></textarea>
                        </div>
                    </div>
<!--                    <div class="col-md-12">
                        <div class="g-recaptcha" data-sitekey="6LeqCAEVAAAAAAptqtjsaUy9H2bsi7exKGU3RU9F"></div>
                    </div>-->
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-skin pull-right" id="btnContactUs">
                            Enviar
                        </button>
                    </div>
                    <div class="col-md-12">
					<?php

					echo "<div class='alert alert-success' role='alert'>";
					echo "	Enviado com sucesso :) !";
					echo "</div>";

					echo "<div class='alert alert-success' role='alert'>";
					echo "	Houve um erro ao enviar :(";
					echo "</div>";

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
				  Rio de Janeiro, RJ, Brasil - CEP 20.560-005<br>
                                  <abbr title="Phone">Telefones:</abbr> (21) 3129-8939 / (21) 7876-6488 / <br/>(22) 7813-1648<br/>
                                  <img src="img/whatsapp-icon.png" title="Whatsapp">(21) 96422-2002
				</address>


<!--
				<address>
				  <strong>E-mail</strong><br>
                                  <a href="mailto:contato@portobellas.com.br">contato@portobellas.com.br</a>

				</address>	-->
				<address>
				  <strong>Estamos nas redes sociais</strong><br>
                       	<ul class="company-social">
                            <li class="social-facebook"><a href="https://www.facebook.com/PortoBellas" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li class="social-twitter"><a href="https://www.twitter.com/BellasPorto" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <!--<li class="social-dribble"><a href="#" target="_blank"><i class="fa fa-dribbble"></i></a></li>-->
                            <!--<li class="social-google"><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>-->
                        </ul>	
				</address>					
			
			</div>	
		</div>
    </div>	

		</div>
	</section>
	<!-- /Section: contact -->

	*/

	// ***************************************************************




}