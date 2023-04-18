<?php

$destinatario = "seu_email_aqui";

$nome = $_REQUEST['nome'];
$fone = $_REQUEST['fone'];
$email = $_REQUEST['email'];

// FORMATO DO EMAIL NA VARIÁVEL $body

$body = $body . "[FNB DEVELOPERS] NOVO CONTATO RECEBIDO" . "\n";
$body = $body . "Nome: " . $nome . "\n";
$body = $body . "Fone: " . $fone . "\n";
$body = $body . "E-mail: " . $email . "\n\n";

// DISPARA E-MAIL
mail($destinatario, $body, "From: $email\r\n");

// REDIRECIONANDO
header("thanks.html")

?>
