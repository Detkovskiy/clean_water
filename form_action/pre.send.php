<?php

require 'class.phpmailer.php';
require 'class.smtp.php';

$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.yandex.ru';
$mail->SMTPAuth = true;
$mail->Username = 'out.chistaya-voda';
$mail->Password = 'deE63wrAYAXkesWEXEFu77XzK';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;
$mail->setFrom('out.chistaya-voda@yandex.ru');
$mail->addAddress('9119113142@mail.ru');
