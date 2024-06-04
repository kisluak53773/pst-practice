<?php

declare(strict_types=1);

namespace App\Mail;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__ . '/../../');
$dotenv->load();

class EmailSender
{
    public function __construct(
        private PHPMailer $mail,
    )
    {}

    public function greetingsLetter(string $message, string $recipientName, string $reacipientEmail):void
    {
        try {                     
            $this->mail->setFrom($_ENV['COMPANY_EMAIL'], $_ENV['COMPANY_NAME']);
            $this->mail->addAddress($reacipientEmail, $recipientName);
            $this->mail->isHTML(true);
            $this->mail->Subject = 'Greetings';
            $this->mail->Body = $message;

            $this->mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$this->mail->ErrorInfo}";
        }
    }

    public function remindLetter(string $message, string $recipientName, string $reacipientEmail):void
    {
        try {                     
            $this->mail->setFrom($_ENV['COMPANY_EMAIL'], $_ENV['COMPANY_NAME']);
            $this->mail->addAddress($reacipientEmail, $recipientName);
            $this->mail->isHTML(true);
            $this->mail->Subject = 'Reminder';
            $this->mail->Body = $message;

            $this->mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$this->mail->ErrorInfo}";
        }
    }

    public function notificationLetter(string $message, string $recipientName, string $reacipientEmail):void
    {
        try {                     
            $this->mail->setFrom($_ENV['COMPANY_EMAIL'], $_ENV['COMPANY_NAME']);
            $this->mail->addAddress($reacipientEmail, $recipientName);
            $this->mail->isHTML(true);
            $this->mail->Subject = 'Notification';
            $this->mail->Body = $message;

            $this->mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$this->mail->ErrorInfo}";
        }
    }
}