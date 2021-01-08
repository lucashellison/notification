<?php

require __DIR__ . '/../lib_ext/autoload.php';


use Notification\Email;

$novoEmail = new Email(2, 'smtp.gmail.com', "lhcamargo3@gmail.com", "Goodam123", "ssl", 465, "lhcamargo3@gmail.com",
    "Lucas Camargo");
$novoEmail->sendMail("Assunto de Teste", "<p>Esse é um e-mail de <b>teste</b></p>", "lhcamargo3@gmail.com", "Lucas",
    "lhcamargo3@gmail.com", "Camargo");

var_dump($novoEmail);