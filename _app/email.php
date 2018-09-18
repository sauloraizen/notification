<?php
namespace Notification;

use PHPMailer\PHPMailer\PHPMailer; //instanciar o objeto //PHPMailer\PHPMailer\PHPMailer; //nome de quem fez/ nome da biblioteca / nome do método

class Email{
    
    private $mail = \stdClass::class;

    public function __construct() { 
        
        //Server settings
        $this->mail = new PHPMailer(true);    
        $this->mail->SMTPDebug = 2;                                 // Enable verbose debug output
        $this->mail->isSMTP();                                      // Set mailer to use SMTP
        $this->mail->Host = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup SMTP servers
        $this->mail->SMTPAuth = true;                               // Enable SMTP authentication
        $this->mail->Username = 'user@example.com';                 // SMTP username
        $this->mail->Password = 'secret';                           // SMTP password
        $this->mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $this->mail->Port = 587;    
        $this->mail->CharSet = 'utf-8';
        $this->mail->setLanguage('br');
        
        //Recipients
        $this->mail->setFrom('from@example.com', 'Name User Mailer');
    }

    public function sendMail($subject, $body, $replyEmail, $replayName, $addressEmail, $addressName) {
        $this->mail->Subject = (string) $subject;
        $this->mail->Body = $body;
        
        $this->mail->addReplyTo($replyEmail, $replayName);
        $this->mail->addAddress($addressEmail, $addressName);
        
        try {
            $this->mail->send();
        } catch (Exception $e) {
            echo "Erro ao enviar o e-mail: {$this->mail->ErrorInfo} {$e->getMessage()}";
        }
        
        echo "E-mail Enviado!";
    }
}