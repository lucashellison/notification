<?php

require __DIR__ . '/lib_ext/autoload.php';


use Notification\Email;

$novoEmail = new Email;
$novoEmail->sendMail("Assunto de Teste","<p>Esse é um e-mail de <b>teste</b></p>","lhcamargo3@gmail.com","Lucas", "lhcamargo3@gmail.com","Camargo");

var_dump($novoEmail);