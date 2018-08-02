<?php

require 'pre.send.php';

$timestamp = date("Y-m-d H:i:s");

$name = '';
//$number ='';
$email ='';
$subject ='';
$position = '';
$error = false;

if(!empty($_POST['name'])) {
    $name = htmlspecialchars(trim($_POST['name']), ENT_QUOTES);
    if(empty($name)){
        $error = true;
    }
} else {
    $error = true;
}
if(!empty($_POST['emailaddress'])) {
    $email = htmlspecialchars(trim($_POST['emailaddress']), ENT_QUOTES);
    if(empty($email)){
        $error = true;
    }
} else {
    $error = true;
}
/*if(!empty($_POST['number'])) {
    $number = htmlspecialchars(trim($_POST['number']), ENT_QUOTES);
    if(empty($number)){
        $error = true;
    }
} else {
    $error = true;
}*/
if(!empty($_POST['subject'])) {
    $subject = htmlspecialchars(trim($_POST['subject']), ENT_QUOTES);
    if(empty($subject)){
        $error = true;
    }
} else {
    $error = true;
}
if(!empty($_POST['position'])) {
    $position = htmlspecialchars(trim($_POST['position']), ENT_QUOTES);
    if(empty($position)){
        $error = true;
    }
} else {
    $error = true;
}

if(!$error) {

    $content = "<html><body><table border='1' style='border-color: #666; border-collapse: collapse;' cellpadding='5'>" .
        "<tr style='background: #eee;'><td><strong>Время заявки:</strong> </td><td>".$timestamp."</td></tr>" .
        "<tr><td><strong>Форма сайта:</strong> </td><td>".$position."</td></tr>\n\n" .
        "<tr><td><strong>Имя посетителя:</strong> </td><td>".$name."</td></tr>\n\n" .
        "<tr><td><strong>Почта посетителя:</strong> </td><td>".$email."</td></tr>\n\n" .
        "<tr><td><strong>Сообщение посетителя:</strong> </td><td>".$subject."</td></tr>\n\n" .
        "</table></body></html>\n\n";

    function botShallNotPass( $fields = array() ){
        $checkOnBot = 0;
        foreach( $fields as $field ){
            if ( isset($_POST["$field"]) )
            {
                if ( $_POST["$field"] != "" ){
                    $checkOnBot = 1;
                }
            }
        }
        return $checkOnBot;
    }

    $fieldsarray = array("mail");
    $checker = botShallNotPass($fieldsarray);

    if ( $checker != 1 ){

        $mail->isHTML(true);
        $mail->Subject = '[voda.ru] '.$position;
        $mail->Body = $content;

        if (!$mail->send()) {
            echo 'Сообщение не было отправлено!';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            header('location:../thank-you.html');
        }
    }

    else {
        echo "По всей видимости вы бот:) Вы смогли заполнить скрытые поля, созданные для бота.";
    }
}


