<?php
	date_default_timezone_set("America/Sao_Paulo");

	require_once('class.phpmailer.php');
        
        $name = $_POST['nome'];
        $imail = $_POST['email'];
        $telephone = $_POST['tel'];
        $store = $_POST['loja'];
        $store = explode("|", $store);
        $message = $_POST['mensagem'];

        $html = file_get_contents("http://www.valecap.com.br/wp-content/themes/valecappneus/includes/email.html");

        $html = str_replace(array('{nome}', '{email}', '{telefone}', '{loja}', '{loja-email}', '{mensagem}'),
            array($name, $imail, $telephone, $store[1], $store[0], $message), $html);

        $mail = new PHPMailer();

        $mail->IsSMTP();
        $mail->Host = "mail.valecap.com.br";
        $mail->SMTPDebug = 2;

        $mail->SMTPAuth = true;
        $mail->CharSet = "utf-8";
        $mail->Username = "valecap@valecap.com.br";
        $mail->Password = "#V@l3+C*";

        $mail->SetFrom("valecap@valecap.com.br", "Valecap Pneus");

        $mail->AddReplyTo("nao-responda@valecap.com.br", "Não responde");

        $mail->Subject = "Contato - Valecap Pneus [www.valecap.com.br]";

        $mail->MsgHTML($html);

        $mail->AltBody = "Nome: " . $name . "\r\nE-mail: " . $imail . "\r\nTelefone: " . $telephone . "\r\nMensagem enviada para a loja '" . $store[1] . "':\r\n\r\n" . $message;

        $mail->AddAddress($store[0], $store[1]);

        if(!$mail->Send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        } else {
            echo "E-mail enviado!";
        }

?>