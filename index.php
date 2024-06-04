<?php

declare(strict_types=1);

require_once 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use App\Mail\EmailSender;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$mail = new PHPMailer(true);

$mail->isSMTP();                                           
$mail->Host = $_ENV['SMTP_HOST'];
$mail->Port = $_ENV['SMTP_PORT'];
$mail->SMTPAuth = false;
$mail->SMTPSecure = false;

$mailService = new EmailSender($mail);

$mailService->greetingsLetter("Hello there", 'Jhon Doe', "alex@gmail.com");