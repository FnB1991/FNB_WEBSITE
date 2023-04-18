<?php

$destinatario = "seuemail@seudominio";

$assunto = "[FNB DEVELOPERS] - NOVO CONTATO RECEBIDO";
$nome = $_REQUEST['nome'];
$fone = $_REQUEST['fone'];
$email = $_REQUEST['email'];

// FORMATO DO EMAIL NA VARIÁVEL $body

$body = $body . "Assunto: " . $assunto . "\n";
$body = $body . "Nome: " . $nome . "\n";
$body = $body . "Fone: " . $fone . "\n";
$body = $body . "E-mail: " . $email . "\n\n";

// DISPARA E-MAIL
mail($destinatario, $assunto, $body, "From: $email\r\n");

// REDIRECIONANDO
header("thanks.html");
