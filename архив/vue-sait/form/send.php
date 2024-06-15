<?php

$FIO = $_POST['FIO'];
$tel = $_POST['tel'];
$email = $_POST['email'];

$FIO - htmlspecialchars($FIO);
$tel - htmlspecialchars($tel);
$email - htmlspecialchars($email);

$FIO - urldecode($FIO);
$tel - urldecode($tel);
$email - urldecode($email);

$FIO - trim($FIO);
$tel - trim($tel);
$email - trim($email);

if (mail(
    "daniilghur@mail.ru",
    "Новое письмо с сайта",
    "ФИО: ".$FIO. "\n".
    "Телефон: ".$tel. "\n".
    "Электронная почта: ".$email, 
    "От: daniilghur@mail.ru \r\n"
)) {
    echo ('Письмо успешно отправлено!');
}
else{
    ('Есть ошибки! Проверьте данные...');
}
?>