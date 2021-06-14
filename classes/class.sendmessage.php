<?php




class sendmessage{
	
	private $nome;
	private $email;
	private $motivo;
	private	$mensagem;

    private $navegador;
    private $ip;
    private $dataEnvio;

    private $mail;
    private $code;

    function setDataEnvio($dataEnvio){
        $this->dataEnvio = $dataEnvio;
    }
    function getDataEnvio(){
        $this->dataEnvio;
    }

    function setMail($mail){
        $this->mail = $mail;
    }
    function getMail(){
        $this->mail;
    }

    function setCode($code){
        $this->code = $code;
    }
    function getCode(){
        $this->code;
    }

	function setNome($nome){
		$this->nome = $nome;
	}
	function getNome(){
		$this->nome;
	}

    function setEmail($email){
        $this->email = $email;
    }
    function getEmail(){
        $this->email;
    }

    function setMotivo($motivo){
        $this->motivo = $motivo;
    }
    function getMotivo(){
        $this->motivo;
    }
    function setMensagem($mensagem){
        $this->mensagem = $mensagem;
    }
    function getMensagem(){
        $this->mensagem;
    }
    function setNavegador($navegador){
        $this->navegador = $navegador;
    }
    function getNavegador(){
        $this->navegador;
    }

    function setIp($ip){
        $this->ip = $ip;
    }
    function getIp(){
        $this->ip;
    }


    function retornaValores($data){

        return $data;
    }


function enviaMensagem($data_envio, $ip_envio, $nav_envio, $nome_envio, $email_envio, $motivo_envio, $mensagem_envio, $e, $code){
// function enviaMensagem(){

require_once "../phpmailer/src/PHPMailer.php";
require_once "../phpmailer/src/Exception.php";
require_once "../phpmailer/src/OAuth.php";
require_once "../phpmailer/src/SMTP.php";
require_once "../phpmailer/src/POP3.php";


        //$to = 'rh@portobellas.com.br'; //seu e-mail

//      $mail->SetLanguage("br", "../phpmailer/language/");

        //*******************************************************
//        $mail->IsMail();
//        $mail->From = "rh@portobellas.com.br";
//        $mail->FromName = "Porto Bellas";
//        $mail->Host = "mail.portobellas.com.br";
//        $mail->Mailer = "smtp";
//        $mail->AddAddress("rh@portobellas.com.br");
 //       $mail->AddBCC($email);


        //*******************************************************


/*

require 'class.phpmailer.php'; // path to the PHPMailer class
       require 'class.smtp.php';
           $mail = new PHPMailer();
           $mail->IsSMTP();  // telling the class to use SMTP
           $mail->SMTPDebug = 2;
           $mail->Mailer = "smtp";
           $mail->Host = "ssl://smtp.gmail.com";
           $mail->Port = 587;
           $mail->SMTPAuth = true; // turn on SMTP authentication
           $mail->Username = "myemail@example.com"; // SMTP username
           $mail->Password = "mypasswword"; // SMTP password
           $Mail->Priority = 1;
           $mail->AddAddress("myemail@gmail.com","Name");
           $mail->SetFrom($visitor_email, $name);
           $mail->AddReplyTo($visitor_email,$name);
           $mail->Subject  = "This is a Test Message";
           $mail->Body     = $user_message;
           $mail->WordWrap = 50;
           if(!$mail->Send()) {
           echo 'Message was not sent.';
           echo 'Mailer error: ' . $mail->ErrorInfo;
           } else {
           echo 'Message has been sent.';
           }
*/

    //echo "Navegador: ".$nav_envio."<br>";
    //echo "IP: ".$ip_envio."<br>";
    //echo "Data de envio: ".$data_envio."<br>";
    //echo "Nome: ".$nome_envio."<br>";
    //echo "E-mail: ".$email_envio."<br>";
    //echo "Motivo: ".$motivo_envio."<br>";
    //echo "Mensagem: ".$mensagem_envio."<br>";


        $mail = new PHPMailer\PHPMailer\PHPMailer();

        $to                 = 'contato@portobellas.com.br'; //seu e-mail
        //$to                 = 'contato@portobellas.com.br'; //seu e-mail
        $mail->SetLanguage("pt_br", "../phpmailer/language/phpmailer.lang-pt_br.php");
        $mail->CharSet      = "UTF-8";
        $mail->IsSMTP();

        $mail->From         = $to;  //email do remetente
        $mail->Sender       = $to;  //email do remetente
        $mail->FromName     = "PORTO BELLAS *** ATENDIMENTO ELETRÔNICO ***";   //Nome de formatado do remetente

        $mail->Host         = "mail.portobellas.com.br"; //Seu servidor SMTP
        $mail->Mailer       = "smtp";     //Usando protocolo SMTP
        $mail->Port         = 587;
        $mail->Secure       = "tls";

        $mail->SMTPAuth     = "true";
        $mail->Username     = "auto-reply@portobellas.com.br";
        $mail->Password     = "4.br1nc4d31r4.3st4.4c4b4nd0";

        $mail->AddAddress($to);     //O destino do email
        $mail->AddBCC($email_envio);      //Envio com cópia oculta

        $mail->addReplyTo('no-reply@portobellas.com.br');
        $mail->addAddress($email_envio, $nome_envio);
        $mail->addCC($email_envio, 'Cópia');

        $mail->IsHTML(true);

        $mail->Subject = "PORTO BELLAS"; //Assunto do email
        $font = "arial";
        $tamanho = 2;
        $imagem = "https://www.portobellas.com.br/img/logoPortoBellas.png";
        $mail->Body = "<br>";
        $mail->Body .= "<font face=$font size='$tamanho'>";
        $mail->Body .= "<font face=$font size='3'><b>Porto Bellas *** CONTATO ***</b></font>";
        $mail->Body .= "<br><hr>";
        $mail->Body .= "<div align='right'><label style='font-size: 12px; font-weight: bold;'>IP: ".$ip_envio." | Navegador: ".$nav_envio." | Data: ".$data_envio."</label></div>";
        $mail->Body .= "<hr>";
        $mail->Body .= "<br><br>";
        $mail->Body .= "Prezado Sr(a) ".$nome_envio;
        $mail->Body .= "<br><br>";
        $mail->Body .= "Seu contato nos foi requerido. Agradecemos pelo seu contato. Retornaremos o mais rápido possível. Segue abaixo os dados informados: ";
        $mail->Body .= "<br><br>";
        $mail->Body .= "<font face=$font size='$tamanho'><b>Nome</b>: ".$nome_envio. "</font><br>";
        $mail->Body .= "<font face=$font size='$tamanho'><b>E-mail</b>: ".$email_envio. "</font><br>";
        $mail->Body .= "<font face=$font size='$tamanho'><b>Motivo do contato</b>: ".$motivo_envio. "</font><br>";
        $mail->Body .= "<font face=$font size='$tamanho'><b>Mensagem</b>: <br/>".$mensagem_envio. "</font><br>";
        $mail->Body .= "<br><br>";
        $mail->Body .= "<font face=$font size='$tamanho'>Atenciosamente,</font><br><br>";
        $mail->Body .= "<font face=$font size='$tamanho'>Equipe Porto Bellas</font><br>";

        $mail->Body .= "<br><hr>";
        $mail->Body .= "<br>";
        $mail->Body .= "<label style='font-size: $tamanho;'>Não foi você ? Não se preocupe, talvez alguém tenha colocado seu e-mail por engano. Desconsidere esta mensagem.</label>";
        $mail->Body .= "<br>";
        $mail->Body .= "<br><hr size='2'>";
        $mail->Body .= "<tr>";
        $mail->Body .= "    <td valign='top'>";
        $mail->Body .= "        <a href='http://www.portobellas.com.br' target='_blank' title='Acesse o site'><img src='http://www.portobellas.com.br/img/logoPortoBellas4.png' width='130' height='100'></a>";
        $mail->Body .= "    </td>";
        $mail->Body .= "    <td valign='top'>";
        $mail->Body .= "        <font color='#333333'><br>Porto Bellas</font><br><br>";
        $mail->Body .= "        <font size='$tamanho'>Telefones: (21) 3129-8939 / (21) 7876-6488</font><br>";
        $mail->Body .= "        <a href='http://www.portobellas.com.br' target='_blank'><font size='2'>http://www.portobellas.com.br</font></a><br>";
        $mail->Body .= "    </td>";
        $mail->Body .= "</tr>";
        $mail->Body .= "<tr>";
        $mail->Body .= "    <td>&nbsp;";
        $mail->Body .= "    </td>";
        $mail->Body .= "    <td valign='top'>";
        $mail->Body .= "        <a href='mailto:contato@portobellas.com.br' target='_blank'><img src='http://www.portobellas.com.br/img/email.png'></a>";
        $mail->Body .= "        <a href='https://www.facebook.com/PortoBellas' target='_blank'><img src='http://www.portobellas.com.br/img/facebook.png'></a>";
        $mail->Body .= "        <a href='https://www.twitter.com/BellasPorto' target='_blank'><img src='http://www.portobellas.com.br/img/profile_twitter.png'></a>";
        $mail->Body .= "    </td>";
        $mail->Body .= "</tr>";
        $mail->Body .= "<br><br>";
        $mail->Body.='</font>';



        if(!$mail->Send()){ //Check for result of sending mail
            echo "<meta http-equiv='refresh' content='0;url=confirm.php?mail=".$mail."&a=".$code."&send=".base64_encode("merr")."&c=".base64_encode($mail->ErrorInfo)."'>";
        }else{
            
            echo "<meta http-equiv='refresh' content='0;url=../fale-conosco/?send=".base64_encode("mcok")."'>";
//            echo "<meta http-equiv='refresh' content='0;url=confirm.php?mail=".$e."&a=".$code."&send=".base64_encode("mok")."'>";
        }

        $mail->ClearAllRecipients();


}

function enviaMensagemEmpresa(){

require_once "../phpmailer/src/PHPMailer.php";
require_once "../phpmailer/src/Exception.php";
require_once "../phpmailer/src/OAuth.php";
require_once "../phpmailer/src/SMTP.php";
require_once "../phpmailer/src/POP3.php";

        $mail = new PHPMailer\PHPMailer\PHPMailer();

        $to                 = 'rh@portobellas.com.br'; //seu e-mail
        //$to                 = 'contato@portobellas.com.br'; //seu e-mail
        $mail->SetLanguage("pt_br", "../phpmailer/language/phpmailer.lang-pt_br.php");
        $mail->CharSet      = "UTF-8";
        $mail->IsSMTP();

        $mail->From         = $to;  //email do remetente
        $mail->Sender       = $to;  //email do remetente
        $mail->FromName     = "PORTO BELLAS *** ATENDIMENTO ELETRÔNICO ***";   //Nome de formatado do remetente

        $mail->Host         = "mail.portobellas.com.br"; //Seu servidor SMTP
        $mail->Mailer       = "smtp";     //Usando protocolo SMTP
        $mail->Port         = 587;
        $mail->Secure       = "tls";

        $mail->SMTPAuth     = "true";
        $mail->Username     = "auto-reply@portobellas.com.br";
        $mail->Password     = "4.br1nc4d31r4.3st4.4c4b4nd0";

        $mail->AddAddress($to);     //O destino do email
        $mail->AddBCC($this->email);      //Envio com cópia oculta

        $mail->addReplyTo('no-reply@portobellas.com.br');
        $mail->addAddress($this->email, $this->nome);
        $mail->addCC($this->email, 'Cópia');

        $mail->IsHTML(true);

        $mail->Subject = "PORTO BELLAS"; //Assunto do email
        $font = "arial";
        $tamanho = 2;
        $imagem = "http://www.portobellas.com.br/img/logoPortoBellas.png";
        $mail->Body = "<br>";
        $mail->Body .= "<font face=$font size='$tamanho'>";
        $mail->Body .= "<font face=$font size='3'><b>Porto Bellas *** RESPOSTA AUTOMÁTICA ***</b></font>";
        $mail->Body .= "<br><hr>";
        $mail->Body .= "<div align='right'><label style='font-size: 12px; font-weight: bold;'>IP: ".$this->ip." | Navegador: ".$this->navegador."</label></div>";
        $mail->Body .= "<br><hr>";
        $mail->Body .= "<br><br>";
        $mail->Body .= "Foi preenchida um formulário no site da Porto Bellas, com os seguintes dados: ";
//        $mail->Body .= "<br><br>";
//        $mail->Body .= "Agradecemos pelo seu contato. Retornaremos o mais rápido possível. Segue abaixo os dados informados: ";
        $mail->Body .= "<br><br>";
        $mail->Body .= "<font face=$font size='$tamanho'><b>Nome</b>: ".$this->nome. "</font><br>";
        $mail->Body .= "<font face=$font size='$tamanho'><b>E-mail</b>: ".$this->email. "</font><br>";
        $mail->Body .= "<font face=$font size='$tamanho'><b>Motivo do contato</b>: ".$this->motivo. "</font><br>";
        $mail->Body .= "<font face=$font size='$tamanho'><b>Mensagem</b>: <br/>".$this->mensagem. "</font><br>";
        $mail->Body .= "<br><br>";
        $mail->Body .= "<font face=$font size='$tamanho'>Atenciosamente,</font><br><br>";
        $mail->Body .= "<font face=$font size='$tamanho'>Equipe Porto Bellas</font><br>";
        $mail->Body .= "<br><hr size='2'>";
        $mail->Body .= "<tr>";
        $mail->Body .= "    <td valign='top'>";
        $mail->Body .= "        <a href='http://www.portobellas.com.br' target='_blank' title='Acesse o site'><img src='http://www.portobellas.com.br/img/logoPortoBellas4.png' width='130' height='100'></a>";
        $mail->Body .= "    </td>";
        $mail->Body .= "    <td valign='top'>";
        $mail->Body .= "        <font color='#333333'><br>Porto Bellas</font><br><br>";
        $mail->Body .= "        <font size='$tamanho'>Telefones: (21) 3129-8939 / (21) 7876-6488</font><br>";
        $mail->Body .= "        <a href='http://www.portobellas.com.br' target='_blank'><font size='2'>http://www.portobellas.com.br</font></a><br>";
        $mail->Body .= "    </td>";
        $mail->Body .= "</tr>";
        $mail->Body .= "<tr>";
        $mail->Body .= "    <td>&nbsp;";
        $mail->Body .= "    </td>";
        $mail->Body .= "    <td valign='top'>";
        $mail->Body .= "        <a href='mailto:contato@portobellas.com.br' target='_blank'><img src='http://www.portobellas.com.br/img/email.png'></a>";
        $mail->Body .= "        <a href='https://www.facebook.com/PortoBellas' target='_blank'><img src='http://www.portobellas.com.br/img/facebook.png'></a>";
        $mail->Body .= "        <a href='https://www.twitter.com/BellasPorto' target='_blank'><img src='http://www.portobellas.com.br/img/profile_twitter.png'></a>";
        $mail->Body .= "    </td>";
        $mail->Body .= "</tr>";
        $mail->Body .= "<br><br>";
        $mail->Body.='</font>';



        if(!$mail->Send()){ //Check for result of sending mail
            echo "<meta http-equiv='refresh' content='0;url=?send=".base64_encode("merr")."&c=".base64_encode($mail->ErrorInfo)."'>";

        }else{
            echo "<meta http-equiv='refresh' content='0;url=confirm.php?mail=".$this->mail."&c=".base64_encode($this->code)."&send=".base64_encode("mok")."'>";
        }

        $mail->ClearAllRecipients();


}

/*
    public function enviandoRespostaAutomatica($e_mailDest, $e_mailOrig, $n_ome){

        $font = "arial";
        $tamanho = 2;
        $tamanhoSub = 1;

        $pop = new POP3();
        $pop->authorise("mail.portobellas.com.br", 110, 10, "auto-reply@portobellas.com.br", "3st0u.t3.v3nd0.b1s0nh0", 1);


        $mail = new PHPMailer();
        
        $mail->SetLanguage("br");
        $mail->isSMTP();
        $mail->IsHTML(true);
//        $mail->SMTPDebug = 0;
        $mail->SMTPAuth = true;
        $mail->Username = "auto-reply@portobellas.com.br";
        $mail->Password = "3st0u.t3.v3nd0.b1s0nh0";
        
        $mail->Host = "mail.portobellas.com.br"; //Seu servidor SMTP
        $mail->Mailer = "smtp";     //Usando protocolo SMTP
        $mail->Port = "587";
//        $mail->Port = 465;
        
        $mail->setFrom($e_mailOrig, $n_ome);  //email do destinatário // Está certo

        $mail->addAddress($e_mailDest, "PORTO BELLAS");     //O destino do email //e_mailDest
//        $mail->addReplyTo($e_mailDest, $n_ome);
        $mail->AddBCC($e_mailDest);      //Envio com cópia oculta

        $mail->Subject = "*** MENSAGEM AUTOMÁTICA *** Não responder";// . $this->titulo; //Assunto do email
        $mail->CharSet = "UTF-8";
        
        $mail->Body = "<br>"; //Body of the message
        $mail->Body .= "<font face=$font size='$tamanho'>";
        $mail->Body .= "	<b>".utf8_decode('Informações Avançadas').":</b> <br>";
        $mail->Body .= "	<br>IP: ".$this->ip;
        $mail->Body .= "	<br>Navegador: ".$this->navegador;
        $mail->Body .= "	<br>Longitude: ".$this->longitude;
        $mail->Body .= "	<br>Latitude: ".$this->latitude;
        $mail->Body .= "</font>";
        $mail->Body .= "<br>";
        $mail->Body .= "<font face=$font size='3'><b>Houve uma ".utf8_decode("colaboração")." para festa de ".$this->evento."</b>";// . $this->titulo . "</b></font>";
        $mail->Body .= "<br/><hr>";
        $mail->Body .= "<div align='justify'><font face='$font' size='".$tamanho."'>".utf8_decode('Médium: ').utf8_decode($this->nome)."</font></div>";
        $mail->Body .= "<br/>";
        $mail->Body .= "<div align='justify'><font face='$font' size='".$tamanho."'>Produto: ".utf8_decode($this->produto)."</font></div>";
        $mail->Body .= "<div align='justify'><font face='$font' size='".$tamanho."'>Quantidade: ".utf8_decode($this->quant)."</font></div>";
        $mail->Body .= "<br/>";
        $mail->Body .= "<table border='1' style='border-color: #C0C0C0;'>";
        $mail->Body .= "    <tr>";
        $mail->Body .= "        <td>";
        $mail->Body .= "<div align='center'><font face='$font' size='".$tamanho."'><b>".utf8_decode('Autenticação')."</b></font><br>";
        $mail->Body .= "<font face=$font size='$tamanhoSub'><b>".utf8_decode(base64_encode($this->evento))."</font><br>";
        $mail->Body .= "<font face=$font size='$tamanhoSub'><b>".utf8_decode(base64_encode($this->nome))."</font><br>";
        $mail->Body .= "<font face=$font size='$tamanhoSub'><b>".utf8_decode(base64_encode($this->produto))."</font><br>";
        $mail->Body .= "<font face=$font size='$tamanhoSub'><b>".utf8_decode(base64_encode($this->quant))."</font><br>";
        $mail->Body .= "        </td>";
        $mail->Body .= "    </tr>";
        $mail->Body .= "</table>";
        $mail->Body .= "</div>";
        $mail->Body .= "<br><hr size='2'>";
        $mail->Body .= "<font face=$font size='$tamanho'>PORTO BELLAS - Mensagem ".utf8_decode('Automática')."</font><br><br>";
//        $mail->Body .= "<br><hr size='2'>";
        $mail->Body.='</font>';

        if($mail->send()){
//            return true;
/*
                echo "<div class='col-sm-12'>";
                echo "  <div class='col-sm-6'>";
                echo "      <div class='alert alert-success' role='alert'>";
                echo "          <h4 class='alert-heading'>Sucesso!</h4>";
                echo "          <hr>";
                echo "              <p class='mb-0'>Foi encaminhado com sucesso.</p>";
                echo "          <hr>";
                echo "      </div>";
                echo "  </div>";
                echo "</div>";
                */
//                return true;
/*
                
        }else{
            
                echo "<div class='col-sm-12'>";
                echo "  <div class='col-sm-6'>";
                echo "      <div class='alert alert-danger' role='alert'>";
                echo "          <h4 class='alert-heading'>Erro!</h4>";
                echo "          <hr>";
                echo "              <p class='mb-0'>Foi constatado erro no envio da mensagem automática.</p>";
                echo "          <hr>";
                echo "      </div>";
                echo "  </div>";
                echo "</div>";
            return false;
        }
        $mail->ClearAllRecipients();
        die;
    }
	
*/

function enviaConfirmacao($number_captcha, $link, $dataEnvio, $email){

require_once "../phpmailer/src/PHPMailer.php";
require_once "../phpmailer/src/Exception.php";
require_once "../phpmailer/src/OAuth.php";
require_once "../phpmailer/src/SMTP.php";
require_once "../phpmailer/src/POP3.php";


        $mail = new PHPMailer\PHPMailer\PHPMailer();

        $to                 = 'contato@portobellas.com.br'; //seu e-mail
        //$to                 = 'contato@portobellas.com.br'; //seu e-mail
        $mail->SetLanguage("pt_br", "../phpmailer/language/phpmailer.lang-pt_br.php");
        $mail->CharSet      = "UTF-8";
        $mail->IsSMTP();

        $mail->From         = $to;  //email do remetente
        $mail->Sender       = $to;  //email do remetente
        $mail->FromName     = "PORTO BELLAS *** CONFIRMAÇÃO DE ENVIO ***";   //Nome de formatado do remetente

        $mail->Host         = "mail.portobellas.com.br"; //Seu servidor SMTP
        $mail->Mailer       = "smtp";     //Usando protocolo SMTP
        $mail->Port         = 587;
        $mail->Secure       = "tls";

        $mail->SMTPAuth     = "true";
        $mail->Username     = "auto-reply@portobellas.com.br";
        $mail->Password     = "4.br1nc4d31r4.3st4.4c4b4nd0";

        $mail->AddAddress($email);     //O destino do email
//        $mail->AddBCC($this->email);      //Envio com cópia oculta

        $mail->addReplyTo('no-reply@portobellas.com.br');
//        $mail->addAddress($this->email, $this->nome);
//        $mail->addCC($this->email, 'Cópia');

        $mail->IsHTML(true);

        $mail->Subject = "PORTO BELLAS"; //Assunto do email
        $font = "arial";
        $tamanho = 2;
        $imagem = "http://www.portobellas.com.br/img/logoPortoBellas.png";
        $mail->Body = "<br>";
        $mail->Body .= "<font face=$font size='$tamanho'>";
//        $mail->Body .= "<font face=$font size='3'><b>Porto Bellas - ".$this->motivo." - *** RESPOSTA AUTOMÁTICA ***</b></font>";
        $mail->Body .= "<br><br>";
        $mail->Body .= "Prezado Sr(a) ".$this->nome;
        $mail->Body .= "<br><br>";
        $mail->Body .= "Este é um e-mail de confirmação do preenchimento do nosso contato. Se foi você, confirme no link abaixo, por favor:";
        $mail->Body .= "<br><br>";
        $mail->Body .= "<a href='".$link."'>Clique aqui</a><br>";
        $mail->Body .= "<br><br>";
        $mail->Body .= "<label>Se preferir, cole isso no seu navegador: ".$link."</label><br>";
        $mail->Body .= "<br><br>";
        $mail->Body .= "<label>Se Se não foi você, não precisa fazer nada, e pedimos desculpas, talvez alguém mencionou o e-mail ".$email." por engano.</label><br>";
        $mail->Body .= "<br><br>";
        $mail->Body .= "Lembramos que este formulário estará disponível poe 24 horas. Após isso, será descartada.:";
        $mail->Body .= "<br><br>";
        $mail->Body .= "<font face=$font size='$tamanho'>Atenciosamente,</font><br><br>";
        $mail->Body .= "<font face=$font size='$tamanho'>Equipe Porto Bellas</font><br>";
        $mail->Body .= "<br><hr size='2'>";
        $mail->Body .= "<tr>";
        $mail->Body .= "    <td valign='top'>";
        $mail->Body .= "        <a href='http://www.portobellas.com.br' target='_blank' title='Acesse o site'><img src='http://www.portobellas.com.br/img/logoPortoBellas4.png' width='130' height='100'></a>";
        $mail->Body .= "    </td>";
        $mail->Body .= "    <td valign='top'>";
        $mail->Body .= "        <font color='#333333'><br>Porto Bellas</font><br><br>";
        $mail->Body .= "        <font size='$tamanho'>Telefones: (21) 3129-8939 / (21) 7876-6488</font><br>";
        $mail->Body .= "        <a href='http://www.portobellas.com.br' target='_blank'><font size='2'>http://www.portobellas.com.br</font></a><br>";
        $mail->Body .= "    </td>";
        $mail->Body .= "</tr>";
        $mail->Body .= "<tr>";
        $mail->Body .= "    <td>&nbsp;";
        $mail->Body .= "    </td>";
        $mail->Body .= "    <td valign='top'>";
        $mail->Body .= "        <a href='mailto:contato@portobellas.com.br' target='_blank'><img src='http://www.portobellas.com.br/img/email.png'></a>";
        $mail->Body .= "        <a href='https://www.facebook.com/PortoBellas' target='_blank'><img src='http://www.portobellas.com.br/img/facebook.png'></a>";
        $mail->Body .= "        <a href='https://www.twitter.com/BellasPorto' target='_blank'><img src='http://www.portobellas.com.br/img/profile_twitter.png'></a>";
        $mail->Body .= "    </td>";
        $mail->Body .= "</tr>";
        $mail->Body .= "<br><br>";
        $mail->Body.='</font>';



        if(!$mail->Send()){ //Check for result of sending mail
            echo "<meta http-equiv='refresh' content='0;url=?send=".base64_encode("merr")."&c=".base64_encode($mail->ErrorInfo)."'>";

        }else{
            echo "<meta http-equiv='refresh' content='0;url=?send=".base64_encode("mok")."'>";
        }

        $mail->ClearAllRecipients();


}



}