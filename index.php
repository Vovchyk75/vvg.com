<?php
error_reporting(-1);
ini_set('display_errors','on');
include './vendor/autoload.php';
$mail = new PHPMailer\PHPMailer\PHPMailer();
$mail->addAddress('volodymyr.galas@gmail.com');
// echo 'Done';
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="/style/style.css" rel="stylesheet" type="text/css" >
    <script src="/vendor/public/jquery/dist/jquery.min.js"></script>
</head>
<body>
<h1>vvg.com</h1>
<p>The second commit into GitHub 2</p>
</body>
</html>