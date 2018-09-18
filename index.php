<?php

require __DIR__ . '/lib_ext/autoload.php'; //faz o autoload do composer

//FORMA 1
//use Notification\Email;
//$novoEmail = new Email;

//FORMA 2
$novoEmail = new Notification\Email;

$novoEmail->sendMail("assunto de Teste", "<p>Esse é um -email de <b>teste!</b></p>", "emailreply@teste.com", "Nome do User", "emaildestinario@mail.com" ,"Nome do Destinario");


echo "<pre>"; var_dump($novoEmail); echo "</pre>";