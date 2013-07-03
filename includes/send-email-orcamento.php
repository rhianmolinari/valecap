<?php
	date_default_timezone_set("America/Sao_Paulo");

	require_once('class.phpmailer.php');
        
        $name = $_POST['nome'];
        $imail = $_POST['email'];
        $telephone = $_POST['tel'];
        $city = $_POST['cidade'];
        $state = $_POST['uf'];
        $cepi = $_POST['cep'];
        $endereco = $_POST['address'];
        $doc = $_POST['cpf-cnpj'];
        $cat = $_POST['categoria'];
        $catiguria = explode("|", $cat);
        $paint = $_POST['desenho'];
        $des = explode("|", $paint);
        $measure = $_POST['medida'];
        $message = $_POST['mensagem'];

        $mail = new PHPMailer();

        $html = file_get_contents("http://www.valecap.com.br/wp-content/themes/valecappneus/includes/orcamento.html");

        $html = str_replace(array('{nome}', '{email}', '{telefone}', '{cidade}', '{estado}', '{cep}', '{endereco}', '{doc}', '{categoria}', '{desenho}', '{medida}', '{mensagem}'),
                array($name, $imail, $telephone, $city, $state, $cepi, $endereco, $doc, $catiguria[1], $des[1], $measure, $message), $html);

        $mail->IsSMTP();
        $mail->Host = "mail.valecap.com.br";
        $mail->SMTPDebug = 2;
        $mail->CharSet = "utf-8";

        $mail->SMTPAuth = true;
        $mail->Username = "valecap@valecap.com.br";
        $mail->Password = "#V@l3+C*";

        $mail->SetFrom("valecap@valecap.com.br", "Valecap Pneus");

        $mail->AddReplyTo("nao-responda@valecap.com.br", "Não responde");

        $mail->Subject = "Orçamento - Valecap Pneus [www.valecap.com.br]";

        $mail->MsgHTML($html);

        $mail->AltBody = "Nome: " . $name . "\r\nE-mail: " . $imail . "\r\nTelefone: " . $telephone . "\r\nEndereço: " . $endereco . "\r\nCidade: " . $city . "\r\nEstado: " . $state . "\r\nCEP: " . $cepi . "\r\nCPF/CNPJ: " . $doc . "\r\nCategoria do produto: " . $catiguria[1] . "\r\nDesenho: " . $des[1] . "\r\nMedida: " . $measure . "\r\nMensagem enviada:\r\n\r\n" . $message;

        $mail->AddAddress("vendas@valecap.com.br", "Vendas - Valecap Pneus");

        if(!$mail->Send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        } else {
            echo "E-mail enviado!";
        }

?>