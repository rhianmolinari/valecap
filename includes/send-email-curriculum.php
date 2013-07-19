<?php
$allowedExts = array("pdf");
$ext = explode(".", $_FILES["datafile"]["name"]);
$extension = end($ext);

if ((($_FILES["datafile"]["type"] == "application/pdf")) && ($_FILES["datafile"]["size"] < 2000000) && in_array($extension, $allowedExts)) {
    if ($_FILES["datafile"]["error"] > 0) {
        echo "Erro! C&oacute;digo de retorno: " . $_FILES["datafile"]["error"];
    } else {
        if (file_exists("../../../uploads/" . date("Y") . "/" . date("m") . "/" . $_FILES["datafile"]["name"])) {
            echo "../../../uploads/" . date("Y") . "/" . date("m") . "/" . $_FILES["datafile"]["name"] . " j&aacute; existe.";
        } else {
            if(!is_dir("../../../uploads/" . date("Y") . "/" . date("m"))) {
                mkdir("../../../uploads/" . date("Y") . "/" . date("m"), 0755, true);
            }
            move_uploaded_file($_FILES["datafile"]["tmp_name"], "../../../uploads/" . date("Y") . "/" . date("m") . "/" . $_FILES["datafile"]["name"]);

            date_default_timezone_set("America/Sao_Paulo");
            require_once('class.phpmailer.php');

            $html = file_get_contents("http://www.valecap.com.br/wp-content/themes/valecappneus/includes/curriculum.html");

            $mail = new PHPMailer();

            $mail->IsSMTP();
            $mail->Host = "mail.valecap.com.br";
            $mail->SMTPDebug = false;

            $mail->SMTPAuth = true;
            $mail->CharSet = "utf-8";
            $mail->Username = "valecap@valecap.com.br";
            $mail->Password = "#V@l3+C*";

            $mail->SetFrom("valecap@valecap.com.br", "Valecap Pneus");

            $mail->AddAttachment("../../../uploads/" . date("Y") . "/" . date("m") . "/" . $_FILES["datafile"]["name"]);

            $mail->AddReplyTo("nao-responda@valecap.com.br", "Não responde");

            $mail->Subject = "Enviando curriculo - Trabalhe Conosco - Valecap Pneus [www.valecap.com.br]";

            $mail->MsgHTML($html);

            $mail->AltBody = "Arquivo em anexo\r\nEnviado pelo site da Valecap, através do endereço http://www.valecap.com.br/trabalhe-conosco/";

            $mail->AddAddress("rh@valecap.com.br", "RH Valecap");

            if(!$mail->Send()) {
                echo "Mailer Error: " . $mail->ErrorInfo;
            } else {
                unlink("../../../uploads/" . date("Y") . "/" . date("m") . "/" . $_FILES["datafile"]["name"]);
                echo "Seu curr&iacute;culo foi enviada com sucesso!";
            }
        }
    }
} else {
    echo "Arquivo inv&aacute;lido, por favor certifique-se que &eacute; um arquivo PDF";
}
?>