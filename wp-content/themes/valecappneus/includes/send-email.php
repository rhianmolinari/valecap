<?php
	date_default_timezone_set("America/Sao_Paulo");

	require_once('includes/class.phpmailer.php');
        
        $name = $_POST['nome'];
        $imail = $_POST['email'];
        $telephone = $_POST['tel'];
        $store = $_POST['loja'];
        $message = $_POST['mensagem'];

        $mail = new PHPMailer();

        $mail->IsSMTP();
        $mail->Host = "webmail.a2desenvolvimento.com.br";
        $mail->SMTPDebug = 2;

        $mail->SMTPAuth = true;
        $mail->SMTPSecure = "tls";
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 587;
        $mail->Username = "alexandre.oliveira@a2desenvolvimento.com.br";
        $mail->Password = "5=u+Sfm6";

        $mail->SetFrom($imail, $name);

        $mail->AddReplyTo("nao-responda@valecap.com.br", "Não responde");

        $mail->Subject = "Contato - Valecap Pneus [www.valecap.com.br]";

        $mail->Body = "Nome: " . $name . "\nE-mail: " . $imail . "\nTelefone: " . $telephone . "\nMensagem enviada:\n\n" . $message;

        $mail->AddAddress($store, "Valecap");

        if(!$mail->Send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        } else {
            echo "E-mail enviado!";
            #header("location:/contato/");
        }

?>