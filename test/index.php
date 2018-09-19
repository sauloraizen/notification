<?php

require __DIR__ . '/../lib_ext/autoload.php'; //faz o autoload do composer

//FORMA 1
//use Notification\Email;
//$novoEmail = new Email;

//FORMA 2
$novoEmail = new Notification\Email(2, 'mail.gruporaizen.com.br', 'contato@gruporaizen.com.br', 'graizen_4573', 'tsl', 465, 'contato@gruporaizen.com.br', 'Nome do User');

$novoEmail->sendMail("assunto de Teste", "<p>Esse é um -email de <b>teste!</b></p>", "emailreply@teste.com", "Nome do User", "emaildestinario@mail.com" ,"Nome do Destinario");


echo "<pre>"; var_dump($novoEmail); echo "</pre>";