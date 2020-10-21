<?php
require get_parent_theme_file_path( '/inc/quiz/vendor/autoload.php' );

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once( $_SERVER['DOCUMENT_ROOT'] . '/wp-load.php' );


//Конфиг отправки
$NAME_HOST          = 'Клиент заполнил квиз на сайте';
$HOST               = 'smtp.yandex.ru';
$SMTPAUTH           = true;
$SMTPSECURE         = 'ssl';
$PORT               = 465;
$USERNAME           = 'site@5massage.com';
$PASSWORD           = '19CdbhtgsQ96@LIST';
$CHARSET            = 'UTF-8';
$SUBJECT            = 'Оформление сертификата';


$mail = new PHPMailer(true);                                // Параметр 'true' разрешает модель исключений
//$mail->SMTPDebug = 2;                                               // Раскомментируйте для вывода отладочной информации
$mail->isSMTP();                                                    // Указываем, что модуль будет работать в режиме SMTP
$mail->Host = $HOST;                                                // Адрес сервера SMTP
$mail->SMTPAuth = $SMTPAUTH;                                        // Включение аутентификации SMTP
$mail->Username = $USERNAME;                                        // Адрес полностью, если используется почта для домена.
$mail->Password = $PASSWORD;
$mail->SMTPSecure = $SMTPSECURE;                                    // Включение шифрования TLS, как вариант можно 'ssl'
$mail->Port = $PORT;

//Настройки письма
$mail->CharSet = $CHARSET;                                          // Кодировка
$mail->isHTML(true);                                         // Включение HTML-формата
$mail->setFrom($USERNAME, $NAME_HOST);                              // Отправитель
$mail->Subject = $SUBJECT;
$count = 0;
while ($count < 2){
    if($count === 0){
        // Отправляем клиенту письмо
        $mail->addAddress($sert_email); // Добавление получателя, в таком виде можно указать несколько
        $mail->Body = $client;
        $mail->send();
        $mail->ClearAllRecipients();
    }
    if($count === 1){
        $mail->addAddress('88008@bk.ru'); // Добавление получателя, в таком виде можно указать несколько
        $mail->addAddress('massaje4you@yandex.ru');
        $mail->addAddress('maillboxx@inbox.ru');
        $mail->addAddress('udizha@mail.ru');
        $mail->Body = $manager;
        $mail->send();
        $mail->ClearAllRecipients();
    }
    $count = $count + 1;
}

print_r($succseseful);
