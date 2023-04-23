<?php

$destinatario = "felipenauar@yahoo.com.br";

$assunto = "[FNB DEVELOPERS] - NOVO CONTATO RECEBIDO";
$nome = $_REQUEST['name'];
$email = $_REQUEST['email'];
$fone = $_REQUEST['fone'];

// == FORMATO DO E-MAIL NA VARIAVÉL $BODY == //

$body = $body . "Assunto: " . $assunto . "\n\n";
$body = $body . "Nome: " . $nome . "\n";
$body = $body . "E-mail: " . $email . "\n";
$body = $body . "Fone: " . $fone . "\n";

// == DISPARA E-MAIL COM BASE NAS CONFIGS $ == /
mail($destinatario, $assunto, $body, "From: $email\r\n");

// == APÓS ENVIAR, REDIRECIONA PARA PÁGINA OBRIGADO == /
header("thanks.html");

?>
