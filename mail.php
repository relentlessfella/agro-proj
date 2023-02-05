<?php
$name = $_POST['user_name'];
$mail = $_POST['user_mail'];
$phone = $_POST['user_phone'];
$to		 = 'nrknrps@gmail.com';
$subject = 'Заявка с сайта';
$message = 'Клиент оставил заявку' . "\n" .
            'Имя: ' . $name  . "\n" .
            'Почта: ' . $mail  . "\n" .
            'Номер: ' . $phone;
$headers =  'From: bot.eugene@ai-alatau.kz' . "\r\n" .
            'Reply-To: bot.eugene@ai-alatau.kz' . "\r\n" .
			'Bcc: nnurik2015@mail.ru'. "\r\n" .
            'X-Mailer: PHP/' . phpversion();
$mail = mail($to, $subject, $message, $headers);
if($mail->true) {
    echo 'Error';
} else {
    header('location: index.html');
}
?>