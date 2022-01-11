<?php
    $mail = new Travis\SMTP(require __DIR__ . '/src/config.php');
    use Travis\SMTP;
    $mail = new SMTP($config);
    $mail->to('akihiro.engineer1126@gmail.com');
    $mail->from('ext.kamil.teply@metsagroup.com', 'Paul T.'); // email is required, name is optional
    $mail->subject('Hello World');
    $mail->body('This is a <b>HTML</b> email.');
    $result = $mail->send();
    echo 123;
?>