<?php

if (isset($_POST['email'] && !empty($_POST['email'])))
$nome = addlashes ($_POST['name']);
$email = addlashes ($_POST['email']);;

$to = "contato@mgrcomercio.com";
$subject = "contato via site";
$body = "Nome: ".$nome. "\n".
        "email: ".$email. "\n";
$header = "From:contato@mgrcomercio.com" . "\r\n"
            . "reply-to".$email."\e\n"
            ."x=mailer:PHP/".phpversion();

    if (mail($to,$subject,$body,$header)){

        echo("email enviado com sucesso");

    }
    else{
        echo("email não pode ser enviado");
    }

?>
