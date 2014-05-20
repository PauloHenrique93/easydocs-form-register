<?php

	// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer

	require("phpmailer/class.phpmailer.php");

	// Inicia a classe PHPMailer

	$mail = new PHPMailer();

	 

	// Define os dados do servidor e tipo de conexão

	// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=

	$mail->IsSMTP(); // Define que a mensagem será SMTP

	$mail->Host = "smtp.dominio.net"; // Endereço do servidor SMTP

	//$mail->SMTPAuth = true; // Usa autenticação SMTP? (opcional)

	//$mail->Username = 'seumail@dominio.net'; // Usuário do servidor SMTP

	//$mail->Password = 'senha'; // Senha do servidor SMTP

	 

	// Define o remetente

	//=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=

	$mail->From = ""; //  e-mail

	$mail->FromName = ""; //  nome

	 

	// Define os destinatário(s)

	// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=

	$mail->AddAddress('fulano@dominio.com.br', 'Fulano da Silva');

	$mail->AddAddress('ciclano@site.net');

	//$mail->AddCC('ciclano@site.net', 'Ciclano'); // Copia

	//$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); // Cópia Oculta

	 

	// Define os dados técnicos da Mensagem

	// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=

	$mail->IsHTML(true); // Define que o e-mail será enviado como HTML

	//$mail->CharSet = 'iso-8859-1'; // Charset da mensagem (opcional)

	 

	// Define a mensagem (Texto e Assunto)

	// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=

	$mail->Subject  = "Mensagem Teste"; // Assunto da mensagem

	$mail->Body = "Este é o corpo da mensagem de teste, em <b>HTML</b>! <br /> <img src="http://i2.wp.com/blog.thiagobelem.net/wp-includes/images/smilies/icon_smile.gif?w=625" alt=":)" class="wp-smiley" width="15" height="15"> ";

	$mail->AltBody = "Este é o corpo da mensagem de teste, em Texto Plano! \r\n <img src="http://i2.wp.com/blog.thiagobelem.net/wp-includes/images/smilies/icon_smile.gif?w=625" alt=":)" class="wp-smiley" width="15" height="15"> ";

	 

	// Define os anexos (opcional)

	// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=

	//$mail->AddAttachment("c:/temp/documento.pdf", "novo_nome.pdf");  // Insere um anexo

	 

	// Envia o e-mail

	$enviado = $mail->Send();

	 

	// Limpa os destinatários e os anexos

	$mail->ClearAllRecipients();

	$mail->ClearAttachments();

	 

	// Exibe uma mensagem de resultado

	if ($enviado) {

		echo "E-mail enviado com sucesso!";

	} else {

		echo "Não foi possível enviar o e-mail.<br /><br />";

		echo "<b>Informações do erro:</b> <br />" . $mail->ErrorInfo;

	}

?>
