<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create de l'instance
$envoi_mail = new PHPMailer;

$envoi_mail->Host = 'smtp.gmail.com';
$envoi_mail->Port = 587; // 465;
$envoi_mail->SMTPSecure = 'tls';//

$envoi_mail->isSMTP();
$envoi_mail->SMTPAuth  = true;

//Mot de Passe et adresse e-mail (Gmail)
$envoi_mail->Username = 'test.angelsdecor@gmail.com';
$envoi_mail->Password   = 'azerty123?';

$envoi_mail->SMTPDebug = 0;
//$mail->debugoutput = 'html';

$mailExpediteur = trim(filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL));
$objet = trim(filter_input(INPUT_POST, "objet", FILTER_SANITIZE_STRING, FILTER_SANITIZE_ENCODED));
$message = trim(filter_input(INPUT_POST, "message", FILTER_SANITIZE_STRING, FILTER_SANITIZE_ENCODED));

// Expéditeur
$mailContact = "test.angelsdecor@gmail.com";
$envoi_mail->setFrom($mailContact);

// Destinataire
$mailDestinataire = "test.angelsdecor@gmail.com";
$envoi_mail->addAddress($mailDestinataire);

// Contenu du Mail
$envoi_mail->Subject = $nom.$objet;
$envoi_mail->isHTML(true);

//$envoi_mail->AddEmbeddedImage('images/icon_alerte.png', 'logo_alerte');
$body = "<h4> Monsieur, Madame :".$nom." <br> DEMANDE DE DEVIS:  ".$sujet." <br> A RECONTACTER  AU:  ".$telephone. " OU PAR EMAIL AU : ".$mail." </h4> ";



$envoi_mail->Body = $body;
$envoi_mail->AltBody = strip_tags($body);

/*
//Pièces Jointes
$envoi_mail->addAttachment('/images/image.jpg', 'photo.jpg');
*/

$envoi_mail->AddAttachment( $file_to_attach , $filename );
// Test (Vérification Envoi du Mail)
if ($envoi_mail->send()) {
    echo "Message Envoyé";
} else {

    echo "Message Non Envoyé";
    echo $envoi_mail->ErrorInfo;
}

?>
