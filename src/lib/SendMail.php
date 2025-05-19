<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

use Dotenv\Dotenv;

require_once __DIR__ . '/../../vendor/autoload.php';

// Facultatif : charge les variables d’environnement depuis .env
$dotenv = Dotenv::createImmutable(__DIR__ . '/../../');
$dotenv->load();
$mail = new PHPMailer(true);

try {
  // Configuration SMTP
  $mail->isSMTP();
  $mail->Host       = $_ENV['MAIL_HOST'];
  $mail->SMTPAuth   = true;
  $mail->Username   = $_ENV['MAIL_USERNAME'];
  $mail->Password   = $_ENV['MAIL_PASSWORD'];
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
  $mail->Port       = $_ENV['MAIL_PORT'];

  // Informations sur l’expéditeur
  $mail->setFrom($_ENV['MAIL_FROM'], $_ENV['MAIL_FROM_NAME']);
  $mail->addAddress('germismaxime@example.com', 'Destinataire');

  // Contenu du mail
  $mail->isHTML(true);
  $mail->Subject = 'Test Email';
  $mail->Body    = 'Ceci est un <b>email de test</b> avec Mailtrap.';
  $mail->AltBody = 'Ceci est un email de test avec Mailtrap (texte brut).';

  $mail->send();
  echo 'Message envoyé avec succès.';
} catch (Exception $e) {
  echo "Erreur lors de l'envoi : {$mail->ErrorInfo}";
}
