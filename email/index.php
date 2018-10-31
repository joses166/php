<?php 


require_once("vendor/autoload.php");

//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;

//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use) - em producao
// 1 = client messages - em testes
// 2 = client and server messages - em desenvolvimento
$mail->SMTPDebug = 2;

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "username@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "yourpassword";

//AQUI É INSERIDO O EMAIL DE QUEM ESTÁ ENVIANDO O EMAIL
$mail->setFrom('from@example.com', 'First Last');

//EMAIL CASO O DESTINATARIO RESPONDA O EMAIL
//PODE SER O MESMO DAI ESTA LINHA PODE SER COMENTADA
$mail->addReplyTo('replyto@example.com', 'First Last');

//EMAIL DA PESSOA QUE IRA RECEBER O EMAIL
$mail->addAddress('whoto@example.com', 'John Doe');

//ASSUNTO DO EMAIL
$mail->Subject = 'PHPMailer GMail SMTP test';

//É LIDO UM ARQUIVO HTML QUE IRÁ POSSUIR TODO O CONTEUDO DO EMAIL
$mail->msgHTML(file_get_contents('contents.html'), __DIR__);

//CASO A MENSAGEM EM HTML NAO SEJA ACEITA IRA SER ENVIADO O EMAIL COM O TEXTO ALTERNATIVO
$mail->AltBody = 'This is a plain-text message body';

//CASO SEJA INSERIDO ANEXOS SERÁ INSERIDO NESTA LINHA
$mail->addAttachment('images/phpmailer_mini.png');

//AQUI SERA ONDE O EMAIL SERA ENVIADO
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
    //Section 2: IMAP
    //Uncomment these to save your message in the 'Sent Mail' folder.
    #if (save_mail($mail)) {
    #    echo "Message saved!";
    #}
}

//Section 2: IMAP
//IMAP commands requires the PHP IMAP Extension, found at: https://php.net/manual/en/imap.setup.php
//Function to call which uses the PHP imap_*() functions to save messages: https://php.net/manual/en/book.imap.php
//You can use imap_getmailboxes($imapStream, '/imap/ssl') to get a list of available folders or labels, this can
//be useful if you are trying to get this working on a non-Gmail IMAP server.
function save_mail($mail)
{
    //You can change 'Sent Mail' to any other folder or tag
    $path = "{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail";

    //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
    $imapStream = imap_open($path, $mail->Username, $mail->Password);

    $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
    imap_close($imapStream);

    return $result;
}

?>