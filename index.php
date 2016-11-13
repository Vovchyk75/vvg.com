<?php
error_reporting(-1);
ini_set('display_errors','on');
include './vendor/autoload.php';
$mail = new PHPMailer\PHPMailer\PHPMailer();
$mail->addAddress('volodymyr.galas@gmail.com');
$var1 = 'Done';

include "/index.tpl";